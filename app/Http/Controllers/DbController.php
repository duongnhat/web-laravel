<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class DbController extends Controller
{
    protected function CreateProduct($infor)
    {
        $product = new Product();
        $product->full_name = $infor['0'];
        $product->email = $infor['1'];
        $product->password = $infor['2'];
        $product->remember_token = $infor['3'];
        $product->save();
    }
    
    protected function inSanPham($product) 
    {
        echo "San pham ten {$product->name} co gia {$product->unit_price} dong.";
    }
    
    protected function GetAllProduct() 
    {
        $products = Product::all();
        foreach ($products as $value){
           $this->inSanPham($value); 
        }
    }
    
    protected function TimSanPhim() 
    {
        $product = Product::where('name', 'like', '%tron')->first();
        $this->inSanPham($product);
    }
    
    protected function Update() 
    {
        $product = Product::find(1);
        $product->name = 'Ban Tron Lon';
        $product->save();
    }
    
    public function create(){
        return view('user.create');
    }
}
