<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Userprofile extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $user = User::all();
        return view('profile.edit', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        
    }
    public function user_edit($id){
        return view('frontend.edit_profile.edit',compact('id'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user)
    {
            
        if($request->hasFile('image')){
            $flie=$request->file('image');
            $manager = new ImageManager(new Driver());
            $filename = time().'.'.$flie->getClientOriginalExtension();
            $img=$manager->read($file);
            $img=$img->resize(300,300);
            $img->save(storage_path().'/app/public/profile/'.$filename);
            $save_url= 'storage/app/public/profile/'.$filename;
            $requestData['image']=$save_url;

            User::where('id',$user)->update(['image'=>$save_url]);
            return view('index');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        
    }
}
/*
============================================ image Intarvention Required================================================== 
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

// create image manager with desired driver
$manager = new ImageManager(new Driver());

// read image from file system
$image = $manager->read('images/example.jpg');

// resize image proportionally to 300px width
$image->scale(width: 300);

// insert watermark
$image->place('images/watermark.png');

// save modified image in new format 
$image->toPng()->save('images/foo.png');
*/