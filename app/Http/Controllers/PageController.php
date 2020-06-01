<?php

namespace App\Http\Controllers;
use App\slide;
use App\Product;
use App\ProductType;
use App\User;
use Illuminate\Http\Request;
use Hash;   

class PageController extends Controller
{
    public function getIndex(){
        $slide = slide::all();
        $new_Product = Product::where('new',1)->get();//lấy all các new = 1 để làm sp new 
        $sale_Product = Product::where('promotion_price','<>',0)->get();
        return view('page.trangchu',compact('slide','new_Product','sale_Product'));//truyền biến slide qua view
    }

    public function getLoaiSP($type){
        $loaiSP = Product::where('id_type',$type)->get();//lấy những sp có id_type = type
        $productType = ProductType::all();
        $getDetailType = ProductType::where('id',$type)->first();
        $SP_khac = Product::where('id_type','<>',$type)->paginate(3);
       return view('page.loaiSanpham',compact('loaiSP','SP_khac','productType','getDetailType'));
        
    }

    public function getDetailSP($id){
        $SP = Product::where('id',$id)->first();
        $SP_tuongtu = Product::where('id_type',$SP->id_type)->paginate(3);
        $SP_giamgia = Product::where('promotion_price','<>',0)->get();
        $SP_moi = Product::where('new',1)->get();
        return view('page.sanPham',compact('SP','SP_tuongtu','SP_giamgia','SP_moi'));
    }
    public function getContacts(){
        return view('page.lienHe');
    }
    public function getAbout(){
        return view('page.gioiThieu');
    }
    public function getLogin(){
        return view('page.login');
    }
    public function getRegister(){
        return view('page.dangki');
    }
     public function postRegister( Request $req){
         $this->validate($req,
         [ 
             'email'=>'required|email|unique:users,email',
             'password'=>'required',
             'fullname'=>'required',
             're_password'=>'required|same:password'
         ],
         [
            'email.email'=>"Không đúng định dạng email",
            'email.unique'=>"Email đã có người sử dụng",
            're_password.same'=>"Mật khẩu không khớp"
         ]);
        $user=new User();
        $user->full_name = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->address = $req->address;
        $user->phone = $req->phone;
        $user->save;
        return redirect()->back()->with('Thanhcong','Bạn đã tạo tài khoản thành công');
    }
}
