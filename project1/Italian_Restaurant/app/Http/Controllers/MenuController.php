<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Menu;
use DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $menus = Menu::paginate(10);
        return view('admin.index')->with('menus',$menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'cost' => 'required',
            'body' => 'required',
            // 'cover_image' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        // if($request->hasFile('cover_image')){
        //     // Get filename with the extension
        //     $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        //     // Get just filename
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     // Get just ext
        //     $extension = $request->file('cover_image')->getClientOriginalExtension();
        //     // Filename to store
        //     $fileNameToStore= $filename.'_'.time().'.'.$extension;
        //     // Upload Image
        //     $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        // } else {
        //     $fileNameToStore = 'noimage.jpg';
        // }

        // Create Menu
        $menu = new Menu;
        $menu->title = $request->input('title');
        $menu->cost = $request->input('cost');
        $menu->body = $request->input('body');
        $menu->foodid = $request->input('title');
        // $menu->user_id = auth()->user()->id;
        // $menu->cover_image = $fileNameToStore;
        $menu->save();

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $menu = Menu::find($id);
        // return view('admin.index')->with('menu', $menu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);

        // Check for correct user
        // if(auth()->user()->id !==$menu->user_id){
        //     return redirect('/admin')->with('error', 'Unauthorized Page');
        // }

        return view('admin.edit')->with('menu', $menu);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cost' => 'required'
        ]);

         // Handle File Upload
        // if($request->hasFile('cover_image')){
        //     // Get filename with the extension
        //     $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        //     // Get just filename
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     // Get just ext
        //     $extension = $request->file('cover_image')->getClientOriginalExtension();
        //     // Filename to store
        //     $fileNameToStore= $filename.'_'.time().'.'.$extension;
        //     // Upload Image
        //     $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        // }

        // Create Post
        $menu = Menu::find($id);
        $menu->title = $request->input('title');
        $menu->body = $request->input('body');
        $menu->cost = $request->input('cost');
        // if($request->hasFile('cover_image')){
        //     $menu->cover_image = $fileNameToStore;
        // }
        $menu->save();
            
        return redirect('/admin');
    }


    public function submit(Request $request){
    
     $menu = new Menu;
     $menu->title = $request->input("title");
     $menu->body = $request->input("body");
     $menu->cost = $request->input("cost");
     $menu->food_id = $request->input("foodid");
     $menu->image_url = $request->input("imgurl");
     $menu->soc_rank = $request->input("socrank");

     $menu->save();
     return redirect('/test');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);

        // Check for correct user
        // if(auth()->user()->id !==$menu->user_id){
        //     return redirect('/posts')->with('error', 'Unauthorized Page');
        // }

        // if($menu->cover_image != 'noimage.jpg'){
        //     // Delete Image
        //     Storage::delete('public/cover_images/'.$menu->cover_image);
        // }
        $menu->delete();
        return redirect('/admin');
    }
}
