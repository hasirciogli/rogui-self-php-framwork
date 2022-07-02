<?php


class ROUTER_BASE{
    public static function Route($probe, $check, $callback){
        if ($probe == $check) $callback();
    }
}

?>