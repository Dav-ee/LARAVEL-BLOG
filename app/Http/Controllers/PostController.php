<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Authenticate;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Collective\Html\Eloquent\FormAccessible;
class PostController extends Controller
{


  public function __construct()
{
    $this->middleware('auth',['except' => ['index','show']]);
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $posts =  Post::all();
       $posts =  Post::orderBy('created_at','desc')->paginate(10);
       return view('pages.blog') -> with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$this -> validate($request, [
'title'  => 'required',
'body'  => 'required',
'cover_image'  => 'image|nullable|max:1999'
]);

//handle file upload
if($request -> hasfile('cover_image')){
  // get filename with extension
$getImageNameWithExt = $request->file('cover_image')->getClientOriginalName();
// get just filename
$actualFileName = pathinfo($getImageNameWithExt, PATHINFO_FILENAME);
// GET just extension
$extension_name = $request -> file('cover_image')->getClientOriginalExtension();
// now concatenate and add timestamp
$fileNameToStore= $actualFileName . '_'.time().'.'.$extension_name;
// upload image now
$path =$request -> file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
}
else{
  $fileNameToStore ="noImage.jpg";
}



$post = new Post;
$post -> user_id = auth()->user()->id;
$post -> title = $request->input('title');
$post -> body = $request->input('body');
  $post -> cover_image = $fileNameToStore;
  $post-> save();
// redirect to new page
  return redirect('/blog') -> with('success', 'New Blog Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Post::find($id);
        return view('pages.show') -> with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =  Post::find($id);

        if (auth()->user()->id !== $post-> user_id) {
          return redirect('/blog') -> with('error', 'Unathorized Page!');
        } else {
         return view('pages.edit') -> with('post', $post);
        }
        
       
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
      //handle file upload
if($request -> hasfile('cover_image')){
  // get filename with extension
$getImageNameWithExt = $request->file('cover_image')->getClientOriginalName();
// get just filename
$actualFileName = pathinfo($getImageNameWithExt, PATHINFO_FILENAME);
// GET just extension
$extension_name = $request -> file('cover_image')->getClientOriginalExtension();
// now concatenate and add timestamp
$fileNameToStore= $actualFileName . '_'.time().'.'.$extension_name;
// upload image now
$path =$request -> file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
}



$post = Post::find($id);
$post -> title = $request->input('title');
$post -> body = $request->input('body');

if($request -> hasfile('cover_image')){
  $post -> cover_image = $fileNameToStore;
}

$post-> save();
  return redirect('/blog') -> with('success', 'Blog ' .$id.  ' updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (auth()->user()->id !== $post-> user_id) {
          return redirect('/blog') -> with('error', 'Unathorized Page!');
        } else {

          if(  $post -> cover_image != 'noImage.jpg' ){
          // delete the post
Storage::delete('public/cover_images/'.$post->cover_image);
          }
          $post -> delete();
          return redirect('/blog') -> with('success', 'Post ' .$id.  ' removed.');
        }


    }
}
