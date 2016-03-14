<?php

namespace app\components\helpers;

use Yii;
use app\models\Product;
use app\components\utils\TextUtils;

class Search
{

    public static function pushSearch()
    {
        $id = 2;
        $data = array(
            "title" => "thanh 1234",            
        );
        $params = json_encode($data);
        $url = 'http://localhost:9200/furniture/product/'.$id;
       //var_dump($params); echo'<pre>' ;var_dump($url); die;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Accept: application/json',
            'Content-Type: application/json'
        ));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result);
        echo'<pre>' ;var_dump($result); die;
        if (!is_array($result))
        {
            
        }
    }
    
    public static function Search($title,$offset = 0,$limit = 1)
    {        
        $data = array(
            "query" => array(
                "match" =>array(
                    "title" => $title
                )
            ),
            "from"=>$offset,
            "size"=>$limit,
        );
        $params = json_encode($data);
        $url = 'http://localhost:9200/furniture/product/_search';       
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Accept: application/json',
            'Content-Type: application/json'
        ));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result);
        
        if (!is_array($result))
        {
            return $result->hits->hits;
        }
    }
    
    public static function pushBulkSearch()
    {
        $list = Product::find()
                ->asArray()
                ->all();
        $data ="";
        foreach($list as $value)
            {
                $item = [];
                $id = $value['id'];
                $item["title"] = TextUtils::removeMarks($value['title']);
                $arr = array("index" => array("_id" => $id));
                $data .= json_encode($arr)."\n";
                $data .= json_encode($item)."\n";                
            }      
        $params = $data;
        //echo'<pre>' ;var_dump($params); die;
        $url = 'http://localhost:9200/furniture/product/_bulk';       
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Accept: application/json',
            'Content-Type: application/json'
        ));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result);
        echo'<pre>' ;var_dump($result); die;
        if (!is_array($result))
        {
            
        }
    }
}
