<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use Session;

class CategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addcategory() {
        return view('admin.addcategory');
    }


    public function savecategory(Request $request) {

        //$this->validate($request,['category_name'=> 'required']);
        $this->validate($request,['category_name'=> 'required'],
                                [
                                   'category_name.required' => 'Bạn chưa nhập tên danh mục!',
                                    ]);

        $checkcate = Category::where('category_name', $request->input('category_name'))->first();

        $category = new Category();

        if(!$checkcate) {
            $category->category_name = $request->input('category_name');
            $category->save();

            return redirect('/addcategory')->with('status','Danh mục '. $category->category_name .' được thêm thành công');

        }else {
            return redirect('/addcategory')->with('status1','Danh mục '. $request->input('category_name').' đã tồn tại');

        }
    }

    public function categories() {
        $categories = Category::get();
        return view('admin.categories')->with('categories',$categories);
    }

    public function editcategory($id) {
        $category = Category::find($id);
        return view('admin.editcategory')->with('category',$category);
    }

    public function updatecategory(Request $request) {

        $category = Category::find($request->input('id'));

        //update khi thay doi ten san pham cung thay doi theo

        $oldcat = $category->category_name;

        $category->category_name = $request->input('category_name');

        $data = array();
        $data['product_category'] = $request->input('category_name');

        DB::table('products')->where('product_category',$oldcat)
                            ->update($data);


        $category->update();

        return redirect('/categories')->with('status','The '. $category->category_name .' category has been updated successfully');

    }

    public function deletecategory($id) {
        $category = Category::find($id);
        $category->delete();

        return redirect('/categories')->with('status','The '. $category->category_name .' category has been deleted successfully');


    }


}
