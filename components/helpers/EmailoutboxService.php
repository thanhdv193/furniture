<?php

namespace common\models\service;

use common\component\EmailClient;
use common\models\db\Emailoutbox;
use common\models\enu\EmailType;
use common\models\inter\Service;
use common\models\model\search\AdministratorSearch;
use common\models\model\search\EmailoutboxSearch;
use common\models\output\DataPage;
use common\models\output\Response;
use Yii;
use yii\data\Pagination;
use yii\swiftmailer\Mailer;

class EmailoutboxService implements Service {

    /**
     * Lấy thông tin chi tiết 1 sản phẩm
     */
    public static function get($id) {
        return Emailoutbox::findOne($id);
    }

    /**
     * send email
     * @param type $type
     * @param type $to
     * @param type $subject
     * @param type $template
     * @param type $vars
     * @param type $layout
     * @param type $charset
     */
    public static function send($type, $to, $subject, $template, $vars = array(), $layout = 'layouts/basic', $charset = 'utf-8') {
        $emailoutbox = new Emailoutbox();
        $emailoutbox->createTime = time();
        $emailoutbox->updateTime = time();
        $emailoutbox->sendTime = 0;
        $emailoutbox->charset = $charset;
        $emailoutbox->from = "no-reply@weshop.com.vn";
        $emailoutbox->to = $to;
        $emailoutbox->send = 0;
        $emailoutbox->run = 0;
        $emailoutbox->subject = $subject;
        $emailoutbox->layout = $layout == null || $layout == "" ? 'layouts/basic' : $layout;
        $emailoutbox->template = trim(strtolower($template));
        $emailoutbox->params = json_encode($vars);
        $emailoutbox->type = $type == null ? EmailType::CREATE_ORDER : $type;
        $emailoutbox->body = self::render($template, $vars, $layout);
        $emailoutbox->save();
    }

    /**
     * 
     * @param type $template
     * @param array $vars
     * @param type $baseUrl
     * @param type $layout
     * @return type
     */
    public static function render($template, $vars, $baseUrl, $layout = '/layouts/main') {
        $mailer = new Mailer();
        Yii::$app->params['email_config']['baseUrl'] = $vars['baseUrl'] = $baseUrl;
        return $mailer->render('/emailtemplate' . $template, $vars, '/emailtemplate' . $layout);
    }

    /**
     * get email send template 
     */
    public static function getCronjob() {
        while (true) {
            $transaction = Emailoutbox::getDb()->beginTransaction();
            $emails = Emailoutbox::findBySql("SELECT * FROM emailoutbox where run=0 and sendTime < " . time() . " ORDER BY createTime ASC limit 10 FOR UPDATE")->all();
            if (empty($emails)) {
                break;
            }
            foreach ($emails as $email) {
                $email->updateTime = time();
                $email->run = true;
                $email->send = EmailClient::sendEmail($email->from, $email->to, $email->subject, $email->body) == true ? 1 : 0;
                $email->save();
                echo ("Send email " . $email->to . " " . ($email->send == 1 ? "success" : "fail") . " \n");
            }
            $transaction->commit();
        }
    }

    /**
     * 
     * @param type $id
     * @return Response
     */
    public static function reSend($id) {
        $email = Emailoutbox::findOne($id);
        if ($email == null) {
            return new Response(false, 'Not find emailoutbox');
        }

        $email->run = 0;
        $email->send = 0;
        if (!$email->save() || !$email->validate()) {
            return new Response(false, 'Save fail', $email->errors);
        }
        return new Response(true, 'Save success', $email);
    }

    /**
     * 
     * @param type $condition
     * @return type
     */
    public static function mGet($condition = array()) {
        return Emailoutbox::find()->andWhere(["id" => $condition])->all();
    }

    /**
     * 
     * @param type $condition
     */
    public static function remove($condition) {
        Emailoutbox::deleteAll(["id" => $condition]);
    }

    /**
     * build query by entity search
     * @param AdministratorSearch $search
     * @return type
     */
    private static function buildQuery(EmailoutboxSearch $search) {
        $query = Emailoutbox::find();
        if ($search->to != "" && $search->to != null) {
            $query->andWhere(['LIKE', 'to', strtolower($search->to)]);
        }
        if ($search->send > 0) {
            $query->andWhere(['=', 'send', $search->send == 1]);
        }

        if ($search->createTime > 0 && $search->createTimeTo > 0) {
            $query->andWhere(['between', 'createTime', $search->createTime / 1000, $search->createTimeTo / 1000]);
        } else if ($search->createTime > 0) {
            $query->andWhere(['>=', 'createTime', $search->createTime / 1000]);
        } else if ($search->createTimeTo > 0) {
            $query->andWhere(['<=', 'createTime', $search->createTimeTo / 1000]);
        }

        if ($search->sendTime > 0 && $search->sendTimeTo > 0) {
            $query->andWhere(['between', 'sendTime', $search->sendTime / 1000, $search->sendTimeTo / 1000]);
        } else if ($search->sendTime > 0) {
            $query->andWhere('sendTime >= :time', [':time' => $search->sendTime / 1000]);
        } else if ($search->sendTimeTo > 0) {
            $query->andWhere('sendTime <= :time', [':time' => $search->sendTimeTo / 1000]);
        }
        switch ($search->sort) {
            case 'createTime_asc':
                $query->orderBy("createTime ASC");
                break;
            case 'updateTime_asc':
                $query->orderBy("updateTime ASC");
                break;
            case 'updateTime_desc':
                $query->orderBy("updateTime DESC");
                break;
            case 'send_asc':
                $query->orderBy("send ASC");
                break;
            case 'send_desc':
                $query->orderBy("send DESC");
                break;
            default :
                $query->orderBy("createTime DESC");
        }
        return $query;
    }

    /**
     * Tìm kiếm thông tin admin, có phân trang
     * @param AdministratorSearch $search
     * @return \common\service\DataPage
     */
    public static function filter(EmailoutboxSearch $search) {
        $query = self::buildQuery($search);
        $dataPage = new DataPage();
        $dataPage->dataCount = $query->count();
        $dataPage->dataCount = $dataPage->dataCount == null ? 0 : $dataPage->dataCount;
        $dataPage->pageSize = $search->pageSize <= 0 ? 100 : $search->pageSize;
        $dataPage->page = $search->page <= 0 ? 1 : $search->page;
        $paging = new Pagination(['totalCount' => $dataPage->dataCount]);
        $paging->setPageSize($dataPage->pageSize);
        $paging->setPage($dataPage->page - 1);
        $query->limit($paging->getLimit());
        $query->offset($paging->getOffset());
        $dataPage->data = $query->all();
        $dataPage->pageCount = intval($dataPage->dataCount / $dataPage->pageSize);
        if ($dataPage->pageCount % $dataPage->pageSize != 0) {
            $dataPage->pageCount = $dataPage->pageCount + 1;
        }
        $dataPage->pageCount = $dataPage->pageCount <= 0 ? 1 : $dataPage->pageCount;
        return $dataPage;
    }

}
