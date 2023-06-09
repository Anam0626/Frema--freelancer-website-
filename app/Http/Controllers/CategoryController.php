<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->email == 'admin@gmail.com'){
            return view('dashboard');
        }else{
            return redirect()->route('gig.list');
        }
    }
    public function indexAddCategory()
    {
        $category = Category::all();
        $category2 = Category::all();
        if(Auth::user()->email == 'admin@gmail.com'){
            return view('addCategory', compact('category','category2'));
        }else{
            return redirect()->route('gig.list');
        }
    }
    public function indexCategory()
    {
        $category2 = Category::all();
        $sub_category = SubCategory::all();
        if(Auth::user()->email == 'admin@gmail.com'){
            return view('category', compact('category2','sub_category'));
        }else{
            return redirect()->route('gig.list');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:50',
        ]);

        Category::create($validateData);
        return redirect()->route('addCategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('category')->with('pesan',"Hapus data berhasil");
    }
}
