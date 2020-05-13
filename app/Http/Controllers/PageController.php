<?php

namespace App\Http\Controllers;
use App\slide;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $slide = slide::all();
        $new_Product = Product::where('new',1)->get();//lấy all các new = 1 để làm sp new 
        return view('page.trangchu',compact('slide','new_Product'));//truyền biến slide qua view
    }

    public function getLoaiSP(){
        return view('page.loaiSanpham');
    }

    public function getSP(){
        return view('page.sanPham');
    }
    public function getContacts(){
        return view('page.lienHe');
    }
    public function getAbout(){
        return view('page.gioiThieu');
    }
}
