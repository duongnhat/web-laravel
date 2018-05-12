<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    public function getIndex(){
    	return view('page.than-trang-9');
    }

    public function getThanChinh(){
    	return view('than-trang-9');
    }

    public function postForm(Request $request){
    	echo $request->HoTen;
    	return view('postForm');
    }
    
    protected function testCreateProduct()
    {
        $product = new Product();
        $product->name = 'Ban Dai';
        $product->description = 'Mot cai ban hinh chu nhat';
        $product->unit_price = 153;
        $product->promotion_price = 120;
        $product->image = 'link_hinh_2.png';
        $product->unit = 'Cai';
        $product->save();
    }
    
    protected function inSanPham($product) 
    {
        echo "San pham ten {$product->name} co gia {$product->unit_price} dong.";
    }
    
    protected function testGetAllProduct() 
    {
        $products = Product::all();
        foreach ($products as $value){
           $this->inSanPham($value); 
        }
    }
    
    protected function testTimSanPhim() 
    {
        $product = Product::where('name', 'like', '%tron')->first();
        $this->inSanPham($product);
    }
    
    protected function testUpdate() 
    {
        $product = Product::find(1);
        $product->name = 'Ban Tron Lon';
        $product->save();
    }
    
    public function contact(){
        $this->testGetAllProduct();
        $this->testUpdate();
        return view('page.contact');
    }
}
