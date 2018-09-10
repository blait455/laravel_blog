<?php

namespace App\Http\Controllers\Backend\Blog;

use App\Http\Controllers\Backend\BackendBaseController\BackendBaseController;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BlogController extends BackendBaseController
{
    protected $uploadPath;
    protected $thumbnailImageHeight;
    protected $thumbnailImageWeight;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path('images_blog');
        $this->thumbnailImageHeight = 170;
        $this->thumbnailImageWeight = 250;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category', 'author')->latest()->paginate(8);
        return view('backend.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        return view('backend.blog.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $this->checkboxValueChange($request);

        $postData = $request->user()->posts()->create($request->all());

        $post = Post::findOrFail($postData->id);
        $data = $this->handleRequest($request, $postData->id);

        $post->image = $data['image'];
        $post->save();

//        $this->checkboxValueChange($request);
//        $data = $this->handleRequest($request);
//        $request->user()->posts()->create($data);

        return redirect(route('post.index'))->with('message', 'Your post has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    //--------------------------------------- Custom Methods ----------------------------------------------------------//

    /**
     * Change the check box values passed to create form request
     * @param Request $request
     * @return Request
     */
    private function checkboxValueChange(Request $request)
    {
        // change featured
        if($request->has('featured')){
           $request['featured'] = true;
        } else {
            $request->request->add(['featured' => false]);
        }

        // change no_index
        if($request->has('no_index')){
            $request['no_index'] = true;
        } else {
            $request->request->add(['no_index' => false]);
        }

        // change no_index
        if($request->has('no_follow')){
            $request['no_follow'] = true;
        } else {
            $request->request->add(['no_follow' => false]);
        }

        // change no_index
        if($request->has('top_content')){
            $request['top_content'] = true;
        } else {
            $request->request->add(['top_content' => false]);
        }
        return $request;
    }

    /**
     * Handle Image while creating post, create a thumbnail image and create them inside a folder named by post id
     * @param $request
     * @param $id
     * @return mixed
     */
    private function handleRequest($request, $id)
    {
        $data = $request->all();
        if($request->hasFile('image'))
        {
            $image = $request->file('image');   //take
            $fileName = $image->getClientOriginalName();       //take

            $destination = $this->uploadPath.'/'.$id;
            $successUpload = $image->move($destination, $fileName);  //take

            // if the image uploaded successfully then make the thumbnail
            if($successUpload){
                $extension = $image->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);
                Image::make($destination.'/'.$fileName)
                    ->resize($this->thumbnailImageWeight,$this->thumbnailImageHeight)
                    ->save($destination.'/'.$thumbnail);
            }

            $data['image'] = $fileName;
        }
        return $data;
    }
}
