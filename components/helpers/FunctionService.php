<?php

namespace app\components\helpers;

use app\components\utils\FileUtils;
use common\models\db\AuthAssignment;
use common\models\db\AuthItem;
use common\models\db\AuthItemChild;
use common\models\db\AuthItemGroup;
use common\models\model\form\AssignmentForm;
use common\models\model\form\AuthGroupForm;
use common\models\model\form\AuthItemForm;
use common\models\output\Response;
use ReflectionClass;
use Exception;
use yii\rbac\DbManager;

/**
 * @auth: thanhbc
 */
class FunctionService
{

    //private static $root = "/../../backend/controllers";
    private static $root = "../modules/backend/controllers";
    
    /**
     * get all quyền 
     * @return string
     */
    public static function getServices()
    {
        
        $func = [];
        $func = self::readFunction(self::$root, $func);
        return $func;
    }

    private static function readFunction($path, $func = [])
    {
        $files = FileUtils::read_all_files($path);
        $namespace = [];
        $rewriteRule = [];
        foreach ($files['files'] as $file)
        {
            require_once $file;
            $phpFile = self::readClass($file);
            foreach ($phpFile as $nspace => $className)
            {
                $cl = @$namespace[$nspace];
                if ($cl == null)
                {
                    $cl = [];
                }
                $namespace[$nspace] = array_merge($cl, $className);
            }
        }
        $func = [];
        foreach ($namespace as $nspace => $classNames)
        {
            $file = explode("\\", $nspace);
            $file = end($file);
            foreach ($classNames as $className)
            {
                $class = new ReflectionClass($nspace . "\\" . $className);
                $controllerName = explode("\\", $class->getName());
                $controllerName = strtolower(explode("Controller", end($controllerName))[0]);
                if ($controllerName == 'service' || $controllerName == 'base')
                {
                    continue;
                }
                if (!isset($func[$controllerName]))
                {
                    $func[$controllerName] = [];
                }
                foreach ($class->getMethods() as $method)
                {
                    $method = strtolower($method->getName());
                    if (preg_match('/^action/', $method) && $method != 'actions')
                    {
                        $func[$controllerName][] = $controllerName . "_" . explode("action", $method)[1];
                    }
                }
            }
        }
        return $func;
    }

    private static function readClass($file)
    {
        $class = [];
        if (file_exists($file))
        {
            $php_code = file_get_contents($file);
            $class = self::get_php_classes($php_code);
        }
        return $class;
    }

    private static function get_php_classes($phpcode)
    {
        $classes = array();

        $namespace = 0;
        $tokens = token_get_all($phpcode);
        $count = count($tokens);
        $dlm = false;
        for ($i = 2; $i < $count; $i++)
        {
            if ((isset($tokens[$i - 2][1]) && ($tokens[$i - 2][1] == "phpnamespace" || $tokens[$i - 2][1] == "namespace")) ||
                    ($dlm && $tokens[$i - 1][0] == T_NS_SEPARATOR && $tokens[$i][0] == T_STRING))
            {
                if (!$dlm)
                    $namespace = 0;
                if (isset($tokens[$i][1]))
                {
                    $namespace = $namespace ? $namespace . "\\" . $tokens[$i][1] : $tokens[$i][1];
                    $dlm = true;
                }
            } elseif ($dlm && ($tokens[$i][0] != T_NS_SEPARATOR) && ($tokens[$i][0] != T_STRING))
            {
                $dlm = false;
            }
            if (($tokens[$i - 2][0] == T_CLASS || (isset($tokens[$i - 2][1]) && $tokens[$i - 2][1] == "phpclass")) && $tokens[$i - 1][0] == T_WHITESPACE && $tokens[$i][0] == T_STRING)
            {
                $class_name = $tokens[$i][1];
                if (!isset($classes[$namespace]))
                    $classes[$namespace] = array();
                $classes[$namespace][] = $class_name;
            }
        }
        return $classes;
    }

    /**
     * 
     * @param type $id
     * @return type
     */
    public static function getAuthGroupById($id)
    {
        $group = AuthItemGroup::findOne($id);
        if (empty($group))
        {
            throw new Exception('Không tìm thấy nhóm quyền nào trên hệ thống');
        }
        return $group;
    }

    /**
     * 
     * @return type
     */
    public static function getAuthGroup()
    {
        return AuthItemGroup::find()->orderBy("position asc")->all();
    }

    /**
     * 
     * @return type
     */
    public static function getAuthItem()
    {
        return AuthItem::find()->orderBy("name asc")->all();
    }

    /**
     * 
     * @param type $id
     * @return type
     */
    public static function getAuthItemByName($name)
    {
        return AuthItem::findOne(["name" => $name]);
    }

    /**
     * 
     * @param type $groupId
     */
    public static function getAuthItemByGroupId($groupId)
    {
        return AuthItem::findAll(['groupId' => $groupId]);
    }

    /**
     * 
     * @return type
     */
    public static function getAuthItemChilds()
    {
        return AuthItemChild::find()->orderBy("parent asc")->all();
    }

    /**
     * 
     * @param type $parent
     * @param type $child
     * @return type
     */
    public static function getAuthItemChildsByPrimarykey($parent, $child)
    {
        return AuthItemChild::findOne(["parent" => $parent, "child" => $child]);
    }

    /**
     * 
     * @param type $userId
     * @return type
     */
    public static function getAssignmentByUserId($userId)
    {
        return AuthAssignment::find()->where(["user_id" => $userId])->orderBy('item_name asc')->all();
    }

    /**
     * 
     * @param type $userId
     * @return type
     */
    public static function removeAssignmentByUserId($userId)
    {
        return AuthAssignment::deleteAll(["user_id" => $userId]);
    }

    /**
     * Cấp quyền cho tài khoản
     * @param AssignmentForm $form
     * @return Response
     */
    public static function assignment(AssignmentForm $form)
    {
        self::removeAssignmentByUserId($form->userId);
        $dbManager = new DbManager();
        $dbManager->init();
        foreach ($form->roles as $role)
        {
            $assignment = $dbManager->getAssignment($role, $form->userId);
            if ($assignment == null)
            {
                $dbManager->assign($dbManager->getPermission($role), $form->userId);
            }
        }
        return new Response(true, "Cấp quyền cho tài khoản " . $form->userId . " thành công", $form->roles);
    }

    /**
     * Thêm/sửa nhóm quyền
     * @param AuthGroupForm $form
     * @return Response
     */
    public static function authGroupSave(AuthGroupForm $form)
    {
        if (!$form->validate())
        {
            return new Response(false, "Thêm mới không thành công, dữ liệu không chính xác", $form->errors);
        }
        $authItemGroup = AuthItemGroup::findOne($form->id);
        if ($authItemGroup == null)
        {
            $authItemGroup = new AuthItemGroup();
        }
        $authItemGroup->name = $form->name;
        $authItemGroup->position = $form->position;
        if (!$authItemGroup->save(false))
        {
            return new Response(false, "Dữ liệu không chính xác", $authItemGroup->errors);
        }
        return new Response(true, "Tạo nhóm " . $authItemGroup->name . " thành công", $authItemGroup);
    }

    /**
     * Thêm/Sửa quyền - Định nghĩa quyền
     * @param AuthItemGroup $form
     * @return Response
     */
    public static function authItemSave(AuthItemForm $form)
    {
        $authItem = self::getAuthItemByName($form->name);
        if ($authItem == null)
        {
            $authItem = new AuthItem();
            $authItem->name = $form->name;
            $authItem->type = $form->type;
            $authItem->description = "create By system admin";
            $authItem->created_at = time();
        }
        $authItem->updated_at = time();
        $authItem->alias = $form->alias;
        $authItem->groupId = $form->groupId;
        if (!$authItem->save())
        {
            return new Response(false, "Incorrect data", $authItem->errors);
        }
        $par = explode("_", $authItem->name)[0];
        if (strpos($authItem->name, "_") && self::getAuthItemChildsByPrimarykey($par, $authItem->name) == null)
        {
            $authItemChild = new AuthItemChild();
            $authItemChild->parent = $par;
            $authItemChild->child = $authItem->name;
            $authItemChild->save();
        }
        return new Response(true, "Save " . $authItem->alias . " success", $authItem);
    }

    /**
     * Danh sách nhóm quyền
     * @param 
     * @return 
     */
    public static function filterGroup()
    {
        return AuthItemGroup::find()->orderBy('position')->all();
    }

    /**
     * Thay đổi vị trí
     * @param type $id
     * @return type
     */
    public static function positionGroup($id, $position)
    {
        $group = self::getAuthGroupById($id);
        $group->position = is_numeric($position) ? $position : 0;
        if (!$group->save(false))
        {
            throw new Exception('Thay đổi vị trí hiển thị thất bại!');
        }
        return $group;
    }

    /**
     * Xóa nhóm quyền
     * @param type $id
     * @return type
     */
    public static function removeGroup($id)
    {
        $authItem = self::getAuthItemByGroupId($id);
        if (!empty($authItem))
        {
            throw new Exception('Nhóm quyền đang tồn tại quyền. Không thể xóa');
        }
        AuthItemGroup::deleteAll(['id' => $id]);
    }

}
