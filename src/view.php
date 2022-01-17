<?php


class View{
    public static function render($fileName,$params=array())
    {
        extract($params);
        require_once "app/view/".$fileName.".php";
    }
}
