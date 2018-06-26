<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Product;

class SanPhamController extends Controller
{
    public function save(Request $request)
    {
        $data = $request->all();
        if(isset($data['id'])){
            $product = Product::find($data['id']);
        }else{
            $product = new Product();
        }
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->unit_price = $data['unit_price'];
        $product->promotion_price = $data['promotion_price'];
        $product->unit = $data['unit'];
        if($request->hasFile('photo')){
            if(isset($data['id'])){
                
            }
            $file = $request->file('photo');
            if($file->getClientOriginalExtension() == 'png' || $file->getClientOriginalExtension() == 'jpg'){
                $nameImage = $data['name'].$file->getClientOriginalName();
                $file->move('image product', $nameImage);
                $product->image = $nameImage;
            }else{
                echo 'Định dạng ảnh không phù hợp.';
            }
        }
        $product->save();
        return redirect('/admin/tools/view-product');
    }
    
    public function viewProductAdmin() {
        $soluong = Product::count();
        $data = Product::paginate(6);
        if(Auth::check() && (Auth::user()->admin)=='checked'){
            $dulieu['quyen'] = Auth::user()->admin;
            $dulieu['data'] = $data;
            $dulieu['soluong'] = $soluong;
            return view('/sanpham/list-product', $dulieu);
        }else{
            $dulieu['data'] = $data;
            $dulieu['soluong'] = $soluong;
            return view('/sanpham/list-product', $dulieu);
        }
        
    }
    
    public function viewProductGuest() {
        $soluong = Product::count();
        $data = Product::paginate(8);
        $dulieu['data'] = $data;
        $dulieu['soluong'] = $soluong;
        return view('guest.show-sanpham', $dulieu);
    }

    
    protected function GetAllProduct() 
    {
        $products = Product::all();
        foreach ($products as $value){
           $this->inSanPham($value); 
        }
    }
    
    protected function getProductGuest($id) 
    {
        $data = Product::where('id', $id)->first();
        $dulieu['data'] = $data;
        $them = Product::paginate(4);
        $dulieu['them'] = $them;
        return view('guest.show-single', $dulieu);
    }
    
    protected function getProductAdmin($id) 
    {
        $data = Product::where('id', $id)->first();
        $dulieu['data'] = $data;
        return view('sanpham.edit-product', $dulieu);
    }
    
    
    public function create(){
        return view('sanpham.create');
    }
}
