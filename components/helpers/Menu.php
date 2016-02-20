<?php

namespace app\components\helpers;

use Yii;

class Menu
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
                echo '<li data-id="'.$item['id'].'">';                                                                                                    
                // Gọi lại đệ quy
                // Truyền vào danh sách menu chưa lặp và id parent của menu hiện tại    
                echo '<a class="item data-item-'.$item['id'].'" href="/index.php/backend/product-type/update?id=120" title="Sửa" aria-label="Sửa" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a>';
                echo '<a class="item data-item-'.$item['id'].'" href="/index.php/backend/product-type/delete?id=120" title="Xóa" aria-label="Xóa" data-confirm="Bạn có chắc là sẽ xóa mục này không?" data-method="post" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a>';
                echo '<a href="#" data-id="'.$item['id'].'">'.$item['title'].'</a>';                         
                self::menu($menus, $item['id']);
                echo '</li>';
            }         
            echo '</ul>';
        }       
    }

}
