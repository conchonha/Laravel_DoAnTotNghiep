<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gioithieushop extends Model
{
    //Tạo liên kết tới bản quảng cáo
    protected $table="gioithieushop";
    //tắt bật chế độ tự động quản lý 'created' và 'update at'
    public $timestamps=false;
}
