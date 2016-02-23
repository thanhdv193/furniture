<?php

namespace app\components\helpers;

use Yii;

class MenuLeft
{
    public static function menu($menus, $id_parent = 0)
    {       
        // Biến lưu menu lặp ở bước đệ quy này
        $menu_tmp = array();
        //$menus1 = array();
        foreach ($menus as $key => $item)
        {
            // Nếu có parent_id bằng với parrent id hiện tại
            if ((int) $item['parent_id'] == (int) $id_parent)
            {
                $menu_tmp[] = $item;
                
                // Sau khi thêm vào biên lưu trữ menu ở bước lặp
                // thì unset nó ra khỏi danh sách menu ở các bước tiếp theo
                unset($menus[$key]); 
                //$menus1 = $menus;
            }
          
        }  
        if((int) $id_parent == 125){
           
        }
        //echo'<pre>';        var_dump($id_parent); die;
        // Điều kiện dừng của đệ quy là cho tới khi menu không còn nữa
        if ($menu_tmp)
        { 
            echo '<ul>';
            foreach ($menu_tmp as $item)
            {             
                echo '<li>';    
                echo '<a href="javascript:void(0)" class="arrow"><span></span></a>';
                echo '<a class="em-menu-link" href="#"> <span>'.$item['title'].'</span> </a>';
                // Gọi lại đệ quy                
                //echo '<a href="#" data-id="'.$item['id'].'">'.$item['title'].'</a>';                         
                self::menu($menus, $item['id']);
                echo '</li>';
            }         
            echo '</ul>';
        }       
    }

}
