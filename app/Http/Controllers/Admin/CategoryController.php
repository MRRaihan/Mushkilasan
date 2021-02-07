<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('created_at', 'DESC')->paginate(10);
        $serial = 1;
        return view('admin.category.index', compact('categories', 'serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'category_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $category = new Category();
        $category->category_name= $request->input('category_name');
        if ($request->hasFile('category_image')){
            $file = $request->file('category_image');
            $path ='images/category';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $category->category_image = $path.'/'. $file_name;
        }

        try{
            $category->save();
            return redirect()->route('category.index');
        }catch(Exception $e){
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail(decrypt($id));
        return view('admin.category.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name' => 'required',
            'category_image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $category->category_name = $request->input('category_name');
        if ($request->hasFile('category_image')){
            if (file_exists($category->category_image)){
                unlink($category->category_image);
            }
            $file = $request->file('category_image');
            $path ='images/category';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $category->category_image = $path.'/'. $file_name;
        }
        try {
            $category->update();
            return redirect()->route('category.index');
        } catch (Exception $exception) {
            return redirect()->back();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category){
            if(file_exists(($category->category_image))){
                unlink($category->category_image);
            }
            $category->delete();
        }
        return redirect()->back();
    }
}
