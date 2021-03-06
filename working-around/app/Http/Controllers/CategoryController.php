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
        $categories = DB::table('category')->orderBy('name', 'asc')->get();
        //$categories = DB::table('category')->orderBy('name', 'asc')->join('service', 'category.id', '=', 'service.category_id')->get();
        return view('categories.index', ['categories' => $categories]);
    }

    // Return categories form page (ADMIN ONLY)
    public function createPage()
    {
        return view('categories.create');
    }

    public function showCategory($id)
    {
        $services = DB::table('service')->join('category', 'service.category_id', '=', 'category.id')->join('users', 'service.worker_id', '=', 'users.id')->where('service.reserved', '=', false)->where('category_id', '=', $id)->select('users.name as workerName', 'service.id as id', 'service.description as description', 'service.price as price', 'users.address as address', 'category.name as category')->get();
        return view('categories.show', ['services' => $services, 'id' => $id]);
    }
    // Insert category into the DB
    public function insert(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('categories.index');
    }

    // Return edit page for a specific category
    public function editPage(Category $category)
    {
        return view('categories.edit', ['category' => $category]);
    }


    // Update category in the DB
    public function update(Request $request, $id)
    {
        DB::table('category')->where('id', '=', $id)->update(
            array('name' => $request->name)
        );
        return redirect()->route('categories.index');
    }


    /* Delete category from the database. When we delete a category
        it's better to delete all the services as well, since 
        the category doesn't exist anymore */
    public function delete(Category $category)
    {
        $id = $category->id;
        DB::table('service')->where('category_id', '=', $id)->delete();
        return redirect()->route('categories.index');
    }

}
