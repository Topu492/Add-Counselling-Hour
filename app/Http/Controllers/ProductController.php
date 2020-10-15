<?php

namespace App\Http\Controllers;

use App\Product;
use App\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;


class ProductController extends Controller
{
    //
    public function index(){

        $data = [ ];
        $data['products'] = Product::all();
        return view('backend.product.product_view' , $data);
    }

    public function add()
    {
        // statements here
        $data = [ ];
        return view('backend.product.product_add', $data);
    }

    public function edit ($productID)
    {
        $data = [ ];
        $data['products'] = Product::find($productID);
        return view('backend.product.edit_product', $data);
    }

    public function update (Request $request)
    {
        $products = Product::findOrfail($request)->first();
        $products->product_name = $request->product_name;
        $products->description = $request->description;
        $products->total_rate = $request->total_rate;
        $products->package_rate = $request->package_rate;
        $products->product_slug = $request->product_slug;
        $products->save();

        session()->flash('success','Successfully Updated!');
        return redirect(route('showProduct'));
    }

    public function store(Request $request){

        $request->validate([
            'product_name' => 'required|min:3|max:120',
            'description' =>  'required|max:1500',
            'total_rate'  => 'required|max:25',
            'package_image' => 'required'
         ]);

        $image = '';
        if($request->has('package_image')){
            $image = $request->file('package_image')->store('package_images');

            $lastInsertedId = Product::insertGetId([
                "product_name" => $request->product_name,
                "product_slug" => $request->product_slug,
                "description" => $request->description,
                "total_rate" => $request->total_rate,
                "package_rate" => $request->package_rate,
                "package_image" => $request->package_image,
            ]);

            //get filename with extension
            $fileNameWithExtension = $request->file('package_image')->getClientOriginalName();
            //get filename without extension
            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('package_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = str_replace(' ', '-', $fileName).'-'.time().'.'.$extension;
            //Upload File
            $imagePath = $request->file('package_image')->storeAs("package_image", $fileNameToStore);
//            $thumbnailPathSmall = $request->file('package_image')->storeAs("package_images/thumbnailSmall", $fileNameToStore);
            $thumbnailPathMedium = $request->file('package_image')->storeAs("package_images/thumbnailMedium", $fileNameToStore);
            //Resize image here
            // Thumbnail Small
//            $thubmnailRealPathSmall = public_path("/storage/$thumbnailPathSmall");
//            $thumbnailSmall = Image::make($thubmnailRealPathSmall)->resize(360, 249, function($constraint) {
//                $constraint->aspectRatio();
//            });
//            $thumbnailSmall->save($thubmnailRealPathSmall);
            //Thumbnail Medium
            $thubmnailRealPathMedium = public_path("/storage/$thumbnailPathMedium");
            $thumbnailMedium = Image::make($thubmnailRealPathMedium)->resize(360, 239, function($constraint) {
                $constraint->aspectRatio();
            });
            $thumbnailMedium->save($thubmnailRealPathMedium);
            // New Codes for resize & store images Ends

            Product::find($lastInsertedId)->update([
                "package_image" => $imagePath,
                "thumbnail_medium" => $thumbnailPathMedium,

            ]);
        }

        session()->flash('success','Product Created successfully!');
        return redirect(route('showProduct'));
    }

    public function delete($id)
    {
        $products = Product::find($id);
        Storage::delete($products->package_image);
        $products->delete();

        session()->flash('success','Product Deleted Successfully!');
        return redirect(route('showProduct'));
    }


    public function allproduct()
    {
        $data = [ ];
        $data['settings'] = SiteSettings::find(1);

        $data['products'] = Product::paginate(3);

        return view('frontend.allproduct', $data);
    }

    public function productSee (Request $request)
    {
        $settings = SiteSettings::find(1);
        $product = Product::where('product_slug', $request->productUrl)->firstOrFail();
        return view('frontend.single_product', compact('product','settings'));
    }


}
