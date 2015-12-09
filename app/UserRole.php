<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'sys_group';
    protected $primaryKey = 'id';
}
