<?php
class MenuShopHeaderTop{

    public static function getAll(){
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('select * from ps_menu_shop_top_header');
    }

    public static function update($table, $args, $id){
        if(empty($id)){
            var_dump($args);
            $insertData = Db::getInstance()->insert('menu_shop_top_header', $args);
            var_dump($insertData); die();
        }else{
            Db::getInstance()->update(
                $table,
                $args,
                'id_menu_shop_top_header = '.(int)$id
            );
        }
        return false;
    }
}