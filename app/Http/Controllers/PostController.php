<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Image;
use App\Events\PostCreated;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    // public function show()
    // {
    //     $post = Post::all();
    //     return view('dashboard', ['posts' => $post]);
    // }
    // public function store(Request $request)
    // {
    //     $post_data = $request->validate([
    //         'title' => 'required',
    //         'content' => 'required'
    //     ]);

    //     Post::create($request->only('title', 'content') + ['user_id' => auth()->id()]);
    //     $data = ['title' => $post_data['title'], 'author' => auth()->user()->name];
    //     event(new PostCreated($data));
    //     return redirect()->back()->withSuccess('Post Created');
    // }
    // public function index()
    // {
    //     return view('upload', ['images' => Image::get()]);
    // }

    // //file storage
    // public function upload(Request $request)
    // {
    // echo "<pre>";
    // print_r($request->all());
    // // store file in folder
    // echo $request->file('image')->store('uploads');
    // $fileName = time() . "-ws." . $request->file('image')->getClientOriginalExtension();
    // echo $request->file('image')->storeAs('public/uploads', $fileName);

    // //file upload
    // dd($request->all());
    // // get original name of file that you uploaded
    // dd($request->file('profile')->getClientOriginalName());
    // // get extension
    // dd($request->file('profile')->getRealPath());
    //         $image = $request->profile;
    //         $name = $image->getClientOriginalName();
    //         $image->storeAs('public/images', $name);
    //         $image_save = new Image;
    //         $image_save->name = $name;
    //         $image_save->save();
    //         return back()->with('success', 'Item created successfully!');
    //     }
    // }
    // public function download(Request $request, Image $image)
    // {
    //     return response()->download(storage_path('app/public/images/' . $image->name));
    //}
    // public function helper()
    // {
    //     dd(toUpper('some string'));
    //     return view('home');
    //
    // }

    //Array helpers
    public function index()
    {
        $simpleArray = [
            'name' => 'Desk',
            'mode' => 'gtx',
            'price' => 100,
            'feature' => ['hight_adjustment'],
        ];
        $array = [
            'class_one' => true,
            'class_two' => false,
            'class_three' => true,
        ];

        $products = [
            'product' =>
            ['name' => 'Desk', 'price' => 100],
            ['name' => 'chair', 'price' => 70],
            ['name' => 'Monior', 'price' => 230]
        ];
        //add css classes
        // $output = Arr::toCssClasses($array);

        //dd($output);
        //set and get value
        // $output = data_set($products, 'product.2.price', 40);
        // // $output = data_get($output, 'product.2.price');
        // dd($output);

        //Array to query
        // $output = Arr::query($simpleArray);
        // dd($output);

        //sort
        // $output = Arr::sortRecursive($products);
        // dd($output);
        //flatten
        // $output = Arr::flatten($products);
        // dd($output);

        //check type
        $output = Arr::isAssoc($products);
        dd($output);
    }
}
