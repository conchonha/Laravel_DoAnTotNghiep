<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    //tạo liên kết tới bản tài khoản
    protected $table="tintuc";
    //tắt bật chế độ tự động quản lý 'created' và 'update at'
    public $timestamps=false;
}
