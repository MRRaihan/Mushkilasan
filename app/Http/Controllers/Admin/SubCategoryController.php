<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('category_name')->get();
        return view('admin.subcategory.create', compact('categories'));
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
            'category'=>'required',
            'subcategory_name'=>'required',
            'subcategory_image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'status'=>'required',
        ]);
        $subcategory = new SubCategory();
        $subcategory->category_id= $request->input('category');
        $subcategory->subcategory_name= $request->input('subcategory_name');
        $subcategory->status= $request->input('status');
        if ($request->hasFile('subcategory_image')){
            $file = $request->file('subcategory_image');
            $path ='images/sub-category';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $subcategory->subcategory_image = $path.'/'. $file_name;
        }
        try{
            $subcategory->save();
            return redirect()->route('subcategory.index');
        }catch(Exception $e){
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::orderBy('category_name')->get();
        $subcategory = SubCategory::findOrFail(decrypt($id));
        return view('admin.subcategory.edit', compact('categories', 'subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subcategory)
    {
        $request->validate([
            'category'=>'required',
            'subcategory_name'=>'required',
            'subcategory_image'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'status'=>'required',
        ]);

        $subcategory->category_id = $request->input('category');
        $subcategory->subcategory_name = $request->input('subcategory_name');
        $subcategory->status = $request->input('status');

        if ($request->hasFile('subcategory_image')){
            if (file_exists($subcategory->subcategory_image)){
                unlink($subcategory->subcategory_image);
            }
            $file = $request->file('subcategory_image');
            $path ='images/sub-category';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $subcategory->subcategory_image = $path.'/'. $file_name;
        }

        try {
            $subcategory->update();
            return redirect()->route('subcategory.index');
        } catch (Exception $exception) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subcategory)
    {

        if($subcategory){
            if(file_exists(($subcategory->subcategory_image))){
                unlink($subcategory->subcategory_image);
            }
            $subcategory->delete();
        }
        return redirect()->back();
    }
}
