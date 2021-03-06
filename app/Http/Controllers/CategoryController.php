<?php
namespace App\Http\Controllers;
use App\Category;
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
        $categories = Category::paginate(3);
        return view('admin.categories.index', compact('categories'));
    }
    /**
     * Display Trashed listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        $categories = Category::onlyTrashed()->paginate(3);
        return view('admin.categories.index', compact('categories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create',compact('categories'));
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
            'title'=>'required|min:5',
            'slug'=>'required|min:5|unique:categories'
        ]);
        $categories = Category::create($request->only('title','description','slug'));
        $categories->childrens()->attach($request->parent_id);
        return back()->with('message','Categoría agregada con éxito!!!');
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
    public function edit(Category $category)
    {
         $categories = Category::where('id','!=', $category->id)->get();
         return view('admin.categories.create',['categories' => $categories, 'category'=>$category]);
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
        $category->title = $request->title;
        $category->description = $request->description;
        $category->slug = $request->slug;
        //detach all parent categories
        $category->childrens()->detach();
        //attach selected parent categories
        $category->childrens()->attach($request->parent_id);
        //save current record into database
        $saved = $category->save();
        //return back to the /add/edit form
        if($saved)
            return back()->with('message','Categoría actualizada con éxito!!!');
        else
            return back()->with('message', 'Error en actualizar la categoría.');
    }
    public function recoverCat($id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);
        if($category->restore())
            return back()->with('message','Categoría restaurada con éxito!!!');
        else
            return back()->with('message','Error en restaurar la categoría.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category->childrens()->detach() && $category->forceDelete()){
            return back()->with('message','Categoría eliminada con éxito!!!');
        }else{
            return back()->with('message','Error al eliminar la categoría.');
        }
    }
    public function fetchCategories($id = 0){
        if($id == 0)
            return Category::all();
      $category =  Category::where('id', $id)->first();
      return $category->childrens;
    }
        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function remove(Category $category)
    {
        if($category->delete()){
            return back()->with('message','Categoría enviada a la papelera con éxito!!!');
        }else{
            return back()->with('message','Error al eliminar la categoría.');
        }
    }
}