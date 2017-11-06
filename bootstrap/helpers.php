<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 2017/11/3
 * Time: 下午4:25
 */

function route_class() {
    return str_replace('.', '-', Route::currentRouteName());
}


