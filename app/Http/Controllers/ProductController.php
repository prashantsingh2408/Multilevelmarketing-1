<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
class ProductController extends Controller
{
    public function index()
    {
        return view('Admin/product-details')->with('data',product::get());
    }

    public function getpackagedata(Request $req)
    {
        $package = $req -> post('package');
        $data = User::where('product','=',$package)->get();
        echo json_encode($data);
        exit;
    }

    public function store(Request $request)
    {
        $res = new product;
        $res -> product = $request-> post('product');
        $res -> investment = $request-> post('investment');
        $res -> processing_charge = $request-> post('processing_charge');
        $res -> price = $request-> post('price');
        $res -> point = $request-> post('point');
        $res -> sponser_value = $request-> post('sponser_value');
        $res -> bond_value = $request-> post('bond_value');
        $res -> maturity_time = $request-> post('maturity_time');
        $res -> save();
        if($res -> save()){
             Session::flash('message','Product Added!');
             return redirect('Admin/product-details');
        }else{
            Session::flash('error','Product Not Added!');
            return redirect('Admin/product-details');
        }
    }

    public function getproduct(Request $req)
    {
        $id = $req -> id;
        $data = product::find($id);
        return response()->json(['id'=>$id,'product'=>$data -> product,'investment'=>$data -> investment,'processing_charge'=>$data -> processing_charge,
        'price'=>$data -> price,'point'=>$data -> point,'sponser_value'=>$data -> sponser_value,'bond_value'=>$data -> bond_value,'maturity_time'=>$data -> maturity_time]);
    }

    public function update(Request $request)
    {
        $id = $request-> post('pid');
        $data = [
            'product' => $request-> post('product'),
            'investment' => $request-> post('investment'),
            'processing_charge' => $request-> post('processing_charge'),
            'price' => $request-> post('price'),
            'point' => $request-> post('point'),
            'sponser_value' => $request-> post('sponser_value'),
            'bond_value' => $request-> post('bond_value'),
            'maturity_time' => $request-> post('maturity_time'),
        ];
        $res = product::where('id','=',$id)->update($data);
        if($res){
            Session::flash('message','Product Updated!');
            return redirect('Admin/product-details');
       }else{
           Session::flash('error','Product Not Updated!');
           return redirect('Admin/product-details');
       }
    }

    public function destroy($id)
    {
        // return $id;
        $res = product::destroy($id);
        if($res){
            Session::flash('message','Product Deleted!');
            return redirect('Admin/product-details');
       }else{
           Session::flash('error','Product Not Deleted!');
           return redirect('Admin/product-details');
       }
    }
}
