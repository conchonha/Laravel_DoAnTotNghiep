<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taikhoan extends Model
{
    //tạo liên kết tới bản tài khoản
    protected $table="taikhoan";
    //tắt bật chế độ tự động quản lý 'created' và 'update at'
    public $timestamps=false;
}
