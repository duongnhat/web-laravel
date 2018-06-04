<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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
        return redirect('view-product');
    }
    
    public function viewProduct() {
        $data = Product::paginate(6);
        $dulieu['data'] = $data;
        return view('sanpham.list-product', $dulieu);
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
    
    protected function getProduct($id) 
    {
        $data = Product::where('id', $id)->first();
        $dulieu['data'] = $data;
        return view('sanpham.edit-product', $dulieu);
    }
    
    protected function Update() 
    {
        $product = Product::find(1);
        $product->name = 'Ban Tron Lon';
        $product->save();
    }
    
    public function create(){
        return view('sanpham.create');
    }
}
