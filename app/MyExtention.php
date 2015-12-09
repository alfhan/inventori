<?php

namespace App;

use DB;

class MyExtention
{
    public static function parentMenu($value='')
    {
        return DB::select("select * from sys_menu where parent_id = 0");
    }
    public static function childMenu($value='')
    {
        return DB::select("select * from sys_menu where parent_id > 0");
    }
    public static function profileWeb($value='')
    {
        return DB::select("select * from profil");
    }
    public static function userRole($value='')
    {
    	return DB::select("select * from sys_group");
    }
}