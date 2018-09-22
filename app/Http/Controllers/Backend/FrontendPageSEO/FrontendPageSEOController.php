<?php

namespace App\Http\Controllers\Backend\FrontendPageSEO;

use App\Http\Controllers\Backend\BackendBaseController\BackendBaseController;
use App\Models\Seo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class FrontendPageSEOController extends BackendBaseController
{
    protected $uploadPath;
    protected $thumbnailImageHeight;
    protected $thumbnailImageWeight;


    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path('images_blog/seo');
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
        $seos = Seo::orderBy('id', 'desc')->paginate($this->pageLimit);
        return view("backend.frontendPageSeo.index", compact('seos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Seo $seo)
    {
        return view('backend.frontendPageSeo.create', compact('seo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->checkboxValueChange($request);
        $postData = Seo::create($request->all());

        $post = Seo::findOrFail($postData->id);
        $data = $this->handleRequest($request, $postData->id);

        $post->image = $data['image'];
        $post->save();

        return redirect(route('seo.index'))->with('message', 'Your page has been created!');
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
        $seo = Seo::findOrFail($id);
        return view('backend.frontendPageSeo.edit', compact('seo'));
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
        $seo = Seo::findOrFail($id);
        $this->checkboxValueChange($request);
        // checking if image has been changed
        if($request->hasFile('image')){
            $this->pageImageRemove($id);
            $data = $this->handleRequest($request, $id);
            $seo->update($data);
        }else{
            $data = $request->all();
            $seo->update($data);
        }
        return redirect(route('seo.index'))->with('message', 'Your page has been updated!');
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



    //---------------------------------------------- Custom Function -------------------------------------------------//
    /**
     * Change the check box values passed to create form request
     * @param Request $request
     * @return Request
     */
    private function checkboxValueChange(Request $request)
    {
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
     * Handle Image while creating Page, create a thumbnail image and create them inside a folder named by post id
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
            $extension = $image->getClientOriginalExtension();
            $newImageName = time().'.'.$extension;
            $destination = $this->uploadPath.'/'.$id;
            $successUpload = $image->move($destination, $newImageName);  //take

            // if the image uploaded successfully then make the thumbnail
            if($successUpload){

                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $newImageName);
                Image::make($destination.'/'.$newImageName)
                    ->resize($this->thumbnailImageWeight,$this->thumbnailImageHeight)
                    ->save($destination.'/'.$thumbnail);
            }

            $data['image'] = $newImageName;
        }else{
            $data['image'] = null;
        }
        return $data;
    }

    /**
     * Delete images related to Page id
     * @param $pageId
     * @return \Illuminate\Http\RedirectResponse
     */
    private function pageImageRemove($pageId)
    {
        $dir = $this->uploadPath.DIRECTORY_SEPARATOR.$pageId;
        if(is_dir($dir)) {
            $contents = scandir($dir);
            unset($contents[0], $contents[1]);
            foreach ($contents as $content)
            {
                unlink($dir.DIRECTORY_SEPARATOR.$content);
            }
            rmdir($dir);
        }
    }

}
