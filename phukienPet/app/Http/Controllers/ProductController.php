<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;
use Session;


class ProductController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function addproduct() {
        $categories = Category::All()->pluck('category_name','category_name');
        return view('admin.addproduct')->with('categories',$categories);
    }
    public function products() {
        $products = Product::get();
        return view('admin.products')->with('products', $products);
    }

    public function saveproduct(Request $request) {
       // print ($request->input('product_category'));

        if($request->input('product_category')) {
            $this->validate($request,['product_name'=> 'required',
                'product_price' => 'required',
                'product_description' => 'required',
                'product_image' => 'image|nullable|max:1999',
            ],
                [
                    'product_name.required' => 'Bạn chưa nhập tên sản phẩm!',
                    'product_price.required' => 'Bạn chưa nhập giá sản phẩm!',
                    'product_description.required' => 'Bạn chưa nhập mô tả sản phẩm!',
                ]);



            if($request->hasFile('product_image')) {
                //1. get file name with ext(duoi)

                $fileNameWithExt = $request->file('product_image')->getClientOriginalName();

                //2. get just file name
                $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);

                //3. get just extension
                $extension = $request->file('product_image')->getClientOriginalExtension();

                //4. file name to store
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;

                //upload image
                $path = $request->file('product_image')->storeAs('public/product_images', $fileNameToStore);
            } else {

                $fileNameToStore = 'noimage.jpg';
            }

            $product = new Product();

            $product->product_name = $request->input('product_name');
            $product->product_price = $request->input('product_price');
            $product->product_description = $request->input('product_description');
            $product->product_category = $request->input('product_category');
            $product->product_image = $fileNameToStore;
            $product->status = 1;


            $product->save();
            return redirect('/addproduct')->with('status','Sản phẩm '. $product->product_name .' được thêm thành công');


        } else {
            return redirect('/addproduct')->with('status1','Vui lòng lựa chọn danh mục');

        }


    }

    public function editproduct($id) {
        $categories = Category::All()->pluck('category_name','category_name');

        $product=Product::find($id);
        return view('admin.editproduct')->with('product', $product)->with('categories',$categories);
    }

    public function updateproduct(Request $request) {
        $this->validate($request,['product_name'=> 'required',
            'product_price' => 'required',
            'product_description' => 'required',
            'product_image' => 'image|nullable|max:1999',
        ]);


        $product = Product::find($request->input('id'));

        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_description = $request->input('product_description');
        $product->product_category = $request->input('product_category');

        if($request->hasFile('product_image')) {
            //1. get file name with ext(duoi)

        $fileNameWithExt = $request->file('product_image')->getClientOriginalName();

        //2. get just file name
        $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);

        //3. get just extension
        $extension = $request->file('product_image')->getClientOriginalExtension();

        //4. file name to store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;

        //upload image
        $path = $request->file('product_image')->storeAs('public/product_images', $fileNameToStore);

        //$old_image = Product::find($request->input('id')) ;

        if($product->product_image != 'noimage.jpg') {
            Storage::delete('public/product_images'.$product->product_image);
        }
            $product->product_image = $fileNameToStore;


        }
        $product->update();

        return redirect('/products')->with('status','Sản phẩm '. $product->product_name .' cập nhật thành công');

    }

    public function deleteproduct($id) {
        $product = Product::find($id);


        if($product->product_image != 'noimage.jpg') {
            Storage::delete('public/product_images'.$product->product_image);
        }

        $product->delete();

        return redirect('/products')->with('status','Sản phẩn '. $product->product_name .' xóa thành công');


    }

    public function activate_product($id) {
        $product = Product::find($id);

        $product->status = 1;
        $product->update();
        return redirect('/products')->with('status','Trạng thái sản phẩm '. $product->product_name .' đã được chuyển sang thành đang hoạt động');


    }

    public function unactivate_product($id) {
        $product = Product::find($id);

        $product->status = 0;
        $product->update();
        return redirect('/products')->with('status','Trạng thái sản phẩm  '. $product->product_name .' đã được chuyển sang thành không hoạt động');


    }



}
