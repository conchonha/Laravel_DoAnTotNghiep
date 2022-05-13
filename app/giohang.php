<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giohang extends Model
{
    //Tạo liên kết tới bản quảng cáo
    protected $table="giohang";
    //tắt bật chế độ tự động quản lý 'created' và 'update at'
    public $timestamps=false;
}
