<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    // Get all available categories from the DB and send them into category.index page
    public function indexPage()
    {
        $categories = Category::orderBy('name', 'ASC')->paginate();
        return view('category.index', ['categories' => $categories]);
    }

    // Return categories form page
    public function createPage()
    {
        return view('category.create');
    }

    // Insert category into the DB
    public function insert(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.index');
    }

    // Return edit page for a specific category
    public function editPage(Category $category)
    {
        return view('category.edit', ['category' => $category]);
    }


    // Update category in the DB
    public function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.index');
    }


    /* Delete category from the database. When we delete a category
        it's better to delete the jobs as well, since 
        the category doesn't exists anymore*/
    public function delete(Category $category)
    {
        $id = $category->id;
        DB::table('job')->where('category_id', $id)->delete();
        $category->delete();
        return redirect()->route('category.index');
    }



}
