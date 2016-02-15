<?php

namespace app\components\helpers;

use Yii;

class Menu
{
    public static function menu($menus, $id_parent = 0)
    {       
        // Biến lưu menu lặp ở bước đệ quy này
        $menu_tmp = array();

        foreach ($menus as $key => &$item)
        {
            // Nếu có parent_id bằng với parrent id hiện tại
            if ((int) $item['parent_id'] == (int) $id_parent)
            {
                $menu_tmp[] = $item;
                
                // Sau khi thêm vào biên lưu trữ menu ở bước lặp
                // thì unset nó ra khỏi danh sách menu ở các bước tiếp theo
                unset($menus[$key]);
            }
          
        }  
        
        // Điều kiện dừng của đệ quy là cho tới khi menu không còn nữa
        if ($menu_tmp)
        {
            echo '<ul class="items">';
            foreach ($menu_tmp as $item)
            {             
                echo '<li class="cl_li node_'.$item['id'].'">';
                            
                echo '<a href="'.$item['route'].'">'.$item['name'].'</a>';                                                                 
                // Gọi lại đệ quy
                // Truyền vào danh sách menu chưa lặp và id parent của menu hiện tại
                self::menu($menus, $item['id']);
                echo '</li>';
            }            
            echo '</ul>';
        }
    }

}
