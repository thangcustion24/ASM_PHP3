<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    use HasFactory;
    protected $table = 'tb_san_pham';

    public $primaryKey = 'id';
    protected $fillable = [
        'ten_sp',
        'gia_sp',
        'giam_gia',
        'mo_ta',
        'so_luong',
        'so_luot_xem',
        'id_dm',
    ];

    // public function images()
    // {
    //     return $this->hasMany(Hinhanh::class, 'product_id');
    // }


    // public function category()
    // {
    //     return $this->belongsTo(Danhmuc::class, 'ten_dm');
    // }

    // Định nghĩa mối quan hệ với bảng danh mục
    public function category()
    {
        return $this->belongsTo(Danhmuc::class, 'id_dm');
    }

    // Định nghĩa mối quan hệ với bảng hình ảnh
    public function images()
    {
        return $this->hasMany(Hinhanh::class, 'product_id');
    }

    // Phương thức để lấy ảnh chính
    public function mainImage()
    {
        return $this->hasOne(Hinhanh::class, 'product_id')->where('image_type', 'main');
    }

    public function secondaryImages()
    {
        return $this->hasOne(Hinhanh::class, 'product_id')->where('image_type', 'secondary');
    }




}
