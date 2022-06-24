<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\addProductRorm;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;



class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = Product::where('new', 1)->get();
        return view('page.trangchu', compact('slide','new_product'));
    }
    public function getLoaiSp($type)
    {
        $type_product = ProductType::all();
        $sp_theoloai = Product::where('id_type', $type)->get();
        $sp_khac = Product::where('id_type', '<>', $type)->paginate(3);
        return view('page.trangchu', compact('sp_theoloai', 'type_product', 'sp_khac'));
    }

    public function getAdminAdd()
    {
        return view('pageadmin.formAdd');
    }
    public function PostAdminAdd(Request $request)
    {
        $product = new Product();
        if ($request->hasFile('inputImage')){
            $file=$request->file('inputIamge');
            $fileName=$file->getClientOriginalName('inputImage');
            $file->move('source/image/product',$fileName);
        }
        $file_name=null;
        if($request->file('inputImage')!=null){
            $file_name=$request->file('inputImage')->getClientOriginalName();
        }
        $product->name=$request->inputName;
        $product->image=$file_name;
        $product->description=$request->inputDescription;
        $product->unit_price=$request->inputPrice;
        $product->promotion_price=$request->inputPromotionPrice;
        $product->unit=$request->inputUnit;
        $product->new=$request->inputNew;
        $product->id_type=$request->inputType;
        $product->save();
        return $this->getIndexAdminAdd();
    }
}
