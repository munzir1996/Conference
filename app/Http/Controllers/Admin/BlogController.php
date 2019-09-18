<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Storage;
use File;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('admin.blogs.index')->withBlogs($blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title_ar' => 'required',
            'description_ar' => 'required',
            'title_en' => 'required',
            'description_en' => 'required',
            'photo' => 'required',
        ]);

        //
        $image = $request->file('photo');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/'.$filename);
        Image::make($image)->resize(350, 270)->save($location);
        //

        $data['photo'] = $filename;

        if (Blog::create($data)) {
            session()->flash('success', 'تمت الاضافة بنجاح');

            return redirect()->route('blogs.index');
        } else {
            session()->flash('error', 'حصل خطاء اثناء الأضافة');

            return redirect()->route('blogs.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit')->withBlog($blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request, [
            'title_ar' => 'required',
            'description_ar' => 'required',
            'title_en' => 'required',
            'description_en' => 'required',
            'photo' => 'sometimes',
        ]);

        $blog->title_ar = $request->title_ar;
        $blog->description_ar = $request->description_ar;
        $blog->title_en = $request->title_en;
        $blog->description_en = $request->description_en;

        if($request->hasFile('photo')){
            //Add the new photo
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(350, 270)->save($location);
            $oldFilename = $blog['photo'];
            //Update the database
            $blog['photo'] = $filename;
            //Delete the image
            File::delete('images/'.$oldFilename);
        }

        if ($blog->save()) {
            session()->flash('success', 'تمت الاضافة بنجاح');

            return redirect()->route('blogs.index');

        } else {
            session()->flash('error', 'حصل خطاء اثناء الأضافة');

            return redirect()->route('blogs.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if ($blog->delete()) {
            session()->flash('success', 'تم الحذف بنجاح');

            return redirect()->route('blogs.index');
        } else {
            session()->flash('error', 'حصل خطاء اثناء الحذف');

            return redirect()->route('blogs.index');
        }
    }
}
