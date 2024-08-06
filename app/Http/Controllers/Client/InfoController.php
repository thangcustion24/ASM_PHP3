<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function infoUser(){
        return view('client.taikhoan.thong-tin-tai-khoan');
    }
}
