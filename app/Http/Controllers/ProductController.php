<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductInsertFormRequest;
use Storage;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('product/create');
    }

    public function store(ProductInsertFormRequest $request)
    {
        // $file = $request->file('file');
        // $filename = uniqid().'_'.$file->getClientOriginalName();
        // $file->move(public_path().'/uploads/',$filename);  // storage image in public/uploads . 
        //  Storage::put($file->getClientOriginalName(),file_get_contents($file)); // storing image in storage

        // Product::create([
        //     'title'=>$request->get('title'),
        //     'description'=>$request->get('description'),
        //     'price'=>$request->get('price'),
        //     'imgs'=>$filename
        // ]);
        // return redirect('products/create')->with('status','post inserted successfully');

        $files = $request->file('file');
        $fileAry = array();
            foreach($files as $file){
                 $filename = uniqid() .'_'.$file->getClientOriginalName();
                 array_push($fileAry,$filename);
                 $file->move(public_path().'/uploads/',$filename);
            }
         Product::create([
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'price'=>$request->get('price'),
            'imgs'=>serialize($fileAry)
        ]);
        return redirect('products/create')->with('status','post inserted successfully');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
