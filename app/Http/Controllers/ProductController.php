<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Contact;
use App\Models\Price;
use DB;


use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function product_practices(){

        $products = Product::take(12)->get();

        return view('client.product_practices',
    ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::findorFail($id);

        return view('client.product_item',
        [
            'product' => $product
        ]
            );
        
    }



    public function index()
    {
        return view('admin.homepage');
    }


    public function create()
    {
        
        return view('admin.create');
    }


    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->method = $request->input('method');
        $product->category = $request->input('category');
        $product->disease = $request->input('disease');
        $product->market = $request->input('market');

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move('uploads/', $filename);
            $product->image = $filename;
        } else {
            return $request;
            $product->image = '';

        }

        $product->save();
        return redirect('/admin-panel');

        
    }


    public function create_prices()
    {
        
        return view('admin.create_price');
    }


    public function store_prices(Request $request)
    {
        $price = new Price();
        $price->name = $request->input('name');
        $price->category = $request->input('category');
        $price->ksh = $request->input('ksh');
        $price->ush = $request->input('ush');
        $price->tsh = $request->input('tsh');


        $price->save();
        return redirect('/admin-panel');   
    }

    public function update_prices($id){
        $price = Price::findorFail($id);

        return view('admin.update_prices',[
            'price' => $price
        ]);

    }

    public function store_updated_prices(Request $request) {

        $updating = DB::table('prices')
        ->where('id', $request->input('cid'))
        ->update([

            'name' => $request->input('name'),
            'category' => $request->input('category'),
            'ush' => $request->input('ush'),
            'tsh' => $request->input('tsh'),
            'ksh' => $request->input('ksh'),

        ]);

    return redirect()->route('pricereport');
         
    }

    public function delete_product_price($id){
        $price = Price::findorFail($id);

        $price->delete();
        return redirect()->back();

    }

    public function view_users(){

        $users = User::all();

        return view('admin.view_users',[
            'users' => $users
        ]);
    }

    public function view_contacts(){

        $contacts = Contact::all();

        return view('admin.view_contacts',[
            'contacts' => $contacts
        ]);
    }

    public function view_products(){
        $products = Product::all();

        return view('admin.view_products',[
            'products' => $products
        ]);
    }

    public function update_products($id){
      $product = Product::findorFail($id);

      return view('admin.update',['product'=> $product]);
    }

    public function store_updated_products(Request $request){

        $updating = DB::table('products')
        ->where('id', $request->input('cid'))
        ->update([

            'name' => $request->input('name'),
            'category' => $request->input('category'),
            'price' => $request->input('price'),
            'method' => $request->input('method'),
         
            'disease' => $request->input('disease'),
            'market' => $request->input('market'),

        ]);

        return redirect("/view-products");

    }
    public function delete_products($id){
        $product = Product::findorFail($id);

        $product->delete();

        return redirect()->back();
    }

 
  


    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
