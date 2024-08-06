<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    use HasFactory;
    protected $table = 'tb_danh_muc';

    protected $fillable = [
        'ten_dm',
    ];

    // public function products()
    // {
    //     return $this->hasMany(Sanpham::class);
    // }

    // Định nghĩa mối quan hệ với bảng sản phẩm
    public function products()
    {
        return $this->hasMany(Sanpham::class, 'id_dm');
    }
}
