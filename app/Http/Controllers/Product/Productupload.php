<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class Productupload extends Controller
{
    public function uploadproduct(Request $request){

     

            $validate = validator::make($request->all(),[
                'productname' => 'required|string',
                'price'       => 'required|integer',
                'listprice'   => 'nullable|integer',
                'shopname'    => 'required|string',
                'size'        => 'nullable|string',
                'colour'      => 'nullable|string',
                'brand'       => 'nullable|string',
                'quantity'    => 'required|integer',
                'description' => 'nullable|string',
                'search'      => 'required|string',
                'main_image'      => 'required',
                'main_image.*'    => 'image|mimes:jpeg,jpg,png,svg,gif|max:2048',
                'images'      => 'required',
                'images.*'      => 'image|mimes:jpeg,jpg,png,svg,gif|max:2048',
                'uploader'    => 'required|string',
                'condition'   => 'nullable|string',
                'categories'  => 'required|string',
                'sub_categories' => 'required|string',
                'specification'  => 'nullable|string',
                'percentage'     => 'nullable|string',

            ]);

           

            if($validate->fails()){

                return response()->json([
                    'status'=>400,
                    'error'=> $validate->errors(),
                ]);

            }else{

                $product = new Product;

                $product->productname = $request->productname;
                $product->price       = $request->price;
                $product->listprice   = $request->listprice;
                $product->shopname    = $request->shopname;
                $product->size        = $request->size;
                $product->colour      = $request->colour;
                $product->brand       = $request->brand;
                $product->quantity    = $request->quantity;
                $product->description = $request->description;
                $product->search      = $request->search;
                $product->uploader    = $request->uploader;
                $product->condition   = $request->condition;
                $product->categories  = $request->categories;
                $product->sub_categories = $request->sub_categories;
                $product->specification  = $request->specification;
                $product->percentage     = $request->percentage;

                if($request->hasFile('main_image')){

                        if($request->file('main_image')->isValid()){

                            $fileDestination = 'public/images';
                            $extention = $request->file('main_image')->extension();
                        // $imagename = $main_image->getClientOriginalName();
                            $main_image_name = uniqid().'.'.$extention;

                            $path = $request->file('main_image')->move( $fileDestination, $main_image_name);
                            //all image in an array

                        }


                }

                    
                if($request->hasFile('images')){
                    foreach($request->file('images') as $images){
                        if($images->isValid()){

                            $fileDestination = 'public/images';
                            $extention = $images->extension();
                        // $imagename = $images->getClientOriginalName();
                            $name = uniqid().'.'.$extention;

                            $path =  $images->move( $fileDestination, $name);
                            //all image in an array

                            $imagess[] = '/public/images/'.$name;
                        }

                    }
                }


                $product->images = json_encode($imagess);
                $product->main_image =  '/public/images/'.$main_image_name;

                $product->save();


                return response()->json([
                    'status'=>200,
                    'message'=> $request->productname.' '.'upload succcessful'
                ]);
            }



    }

    public function editproduct(Request $request){


        $validate = validator::make($request->all(),[
            'productid'   => 'required|integer',
            'productname' => 'required|string',
            'price'       => 'required|integer',
            'listprice'   => 'nullable|integer',
            'shopname'    => 'required|string',
            'size'        => 'nullable|string',
            'colour'      => 'nullable|string',
            'brand'       => 'nullable|string',
            'quantity'    => 'required|integer',
            'description' => 'nullable|string',
            'search'      => 'required|string',
            'main_image'      => 'nullable',
            'main_image.*'    => 'image|mimes:jpeg,jpg,png,svg,gif|max:2048',
            'images'      => 'nullable',
            'images.*'      => 'image|mimes:jpeg,jpg,png,svg,gif|max:2048',
            'uploader'    => 'required|string',
            'condition'   => 'nullable|string',
            'categories'  => 'required|string',
            'sub_categories' => 'required|string',
            'specification'  => 'nullable|string',
            'percentage'     => 'nullable|string',

        ]);


        if($validate->fails()){

            return response()->json([
                'status'=>400,
                'error'=> $validate->errors(),
            ]);

        }else{



            if($request->hasFile('main_image')){

                    if($request->file('main_image')->isValid()){

                        $fileDestination = 'public/images';
                        $extention = $request->file('main_image')->extension();
                    // $imagename = $main_image->getClientOriginalName();
                        $main_image_name_edit = uniqid().'.'.$extention;

                        $path = $request->file('main_image')->move( $fileDestination, $main_image_name_edit);
                        //all image in an array
                        $new_main_image = '/public/images/'.$main_image_name_edit;
                    }


            }

            if($request->File('main_image') == null){

                $new_main_image = $request->old_main_image;
            }




            if($request->hasFile('imagesegit')){
                foreach($request->file('imagesegit') as $editimages){
                    if($editimages->isValid()){

                        $fileDestination = 'public/images';
                        $extention = $editimages->extension();
                    // $imagename = $images->getClientOriginalName();
                        $name_edit = uniqid().'.'.$extention;

                        $path =  $editimages->move( $fileDestination, $name_edit);
                        //all image in an array

                        $newimages[] = '/public/images/'.$name_edit;
                    }

                }
            }

            if($request->hasFile('imagesegit') == null){

                $newimages = $request->old_images;
            }

            //dd( $newimages);



            Product::where('id', $request->productid)
            ->update([

               'productname' => $request->productname,
               'price' => $request->price,
               'listprice' => $request->listprice,
               'shopname' => $request->shopname,
               'size' => $request->size,
               'colour' => $request->colour,
               'brand' => $request->brand,
               'quantity' => $request->quantity,
               'description' => $request->description,
               'search' => $request->search,
               'uploader' => $request->uploader,
               'condition' => $request->condition,
               'categories' => $request->categories,
               'sub_categories' => $request->sub_categories,
               'specification' => $request->specification,
               'percentage' => $request->percentage,
               'main_image' =>   $new_main_image,
               'images' => $newimages

            ]);





            return response()->json([
                'status'=>200,
                'message'=> $request->productname.' '.'edited succcessful'
            ]);
        }



    }

    public function deleteproduct($id){


        if( Product::where('id', $id)->update(['deleted' => '1','deleted_at' => now()])){

            return response()->json([
                'status'=>200,
                'message'=> 'Product deleted successfully!',
            ]);

        }else{
            return response()->json([
                'status'=>400,
                'message'=> 'Something went wrong!',
            ]);

        }



    }


    public function productuploadcat(){
        $cat = DB::table('categories')
                    ->select('id','categoryname')
                    ->get();
            if($cat){
                return response()->json([
                    'status'=>200,
                    'cat'=>$cat
                ]);
            }
    }


    public function productuploadsubcat($cat_id){

        $sub_cat = DB::table('sub_categories')
                    ->where('categoryid', '=', $cat_id)
                    ->select('id','sub_categoryname')
                    ->get();

        if($sub_cat){
            return response()->json([
                'status'=>200,
                'sub_cat'=>$sub_cat
            ]);
        }
    }

    public function productsfetch(){


            if(Auth::guard('editor')->user()){

                $user = 'flea';
            }

            if(Auth::guard('seller')->user()){

                $user = Auth::guard('seller')->user()->shopname;

            }


            if(Auth::guard('admin')->user()){

               $user = 'flea';

            }

          $products =  DB::table('products')->where('shopname','=',$user)
                        ->where('deleted','=', 0)
                        ->get();

          return response()->json([
            'products' =>  $products
          ]);

    }

    public function geteditproduct($id){

        $products = DB::table('products')->where('id',$id)->get();

        return  response()->json([
            'status'=> 200,
            'products'=> $products
        ]);
    }

    public function deletemainimage(Request $req){

          $validate = validator::make($req->all(),[
                'id' => 'required|integer',
          ]);

         // dd( $req->image);

        if($validate->fails()){
            return response()->json([
                'status'=> 400,
                'message'=>'error! contact the technical team'
            ]);
        }else{
            Product::where('id', $req->id)->update(['main_image' => '']);


            if(File::exists(public_path($req->image))){

                File::delete(public_path($req->image));
            }

            return response()->json([
                'status'=> 200,
                'message'=> 'image deleted successfully'
            ]);
        }



    }

    public function deleteallimages(Request $req){

        $validate = validator::make($req->all(),[
              'id' => 'required|integer',
        ]);

      if($validate->fails()){
          return response()->json([
              'status'=> 400,
              'message'=>'error! contact the technical team'
          ]);
      }else{

         $imagess = explode(',', $req->images);

         foreach($imagess as $ima){

            if(File::exists(public_path($ima))){

                File::delete(public_path($ima));
            }
         }

          Product::where('id', $req->id)->update(['images' => '']);

          return response()->json([
              'status'=> 200,
              'message'=> 'images deleted successfully'
          ]);
      }



    }

    public function product(){
     
        $prod =  DB::table('categories')->select('id','categoryname')->get();
        $products = json_decode($prod,true);

        for($i = 0; $i < count( $products); $i++){
            $id =   $products[$i]['id'];

            $product =  DB::table('products')
                        ->where('categories',$id)
                        ->where('deleted', 0)
                        ->where('featured', 1)
                        ->get();

            $products[$i]['product'] = $product;
        }
    
        return view('welcome', ['products'=>  $products]) ;
              
    }



    public function headerproduct(){
        $ggg ="ggg";

        return view('Mainpage.Header',['ccc'=> $ggg]);
    }

    public function allproduct(){

        $allproducts =  DB::table('products')
                        ->where('deleted','=', 0)
                        ->get();

        return response()->json([
            'allproduct' =>  $allproducts
        ]);
    }


    public function featured(Request  $req){
         $req->validate([
            'id'=>'required|integer',
            'featured'=>'required|integer'
        ]);

        if($req){

            if($req->featured == 1){
                DB::table('products')
                        ->where('id', $req->id )
                        ->update(['featured'=> 0]);
            }else{
                DB::table('products')
                ->where('id', $req->id )
                ->update(['featured'=> 1]);

            }


            return response()->json([
                'status'=>200,
                'message'=> 'featured updataed!'
            ]);

        }else{

            return response()->json([
                'status'=>400,
                'message'=> $req->errors()
            ]);
        }

    }

    public function flash(Request  $req){
        $req->validate([
           'id'=>'required|integer',
           'flash'=>'required|integer'
       ]);

       if($req){

           if($req->flash == 1){
               DB::table('products')
                       ->where('id', $req->id )
                       ->update(['flash_sale'=> 0]);
           }else{
               DB::table('products')
               ->where('id', $req->id )
               ->update(['flash_sale'=> 1]);

           }


           return response()->json([
               'status'=>200,
               'message'=> 'flash sale updataed!'
           ]);

       }else{

           return response()->json([
               'status'=>400,
               'message'=> $req->errors()
           ]);
       }

   }

   public function products(){

        return view('products');
   }

  

  







}
