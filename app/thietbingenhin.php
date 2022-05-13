<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thietbingenhin extends Model
{
    //tạo liên kết tới bản tài khoản
    protected $table="thietbinghe_nhin";
    //tắt bật chế độ tự động quản lý 'created' và 'update at'
    public $timestamps=false;
}
