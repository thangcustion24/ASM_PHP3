<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hinhanh extends Model
{
    use HasFactory;

    protected $table = 'tb_hinh_anh';
    protected $fillable = [
        'product_id',
        'image_url',
        'image_type'
    ];

     // Định nghĩa mối quan hệ với bảng sản phẩm
     public function product()
     {
         return $this->belongsTo(Sanpham::class, 'product_id');
     }
}
