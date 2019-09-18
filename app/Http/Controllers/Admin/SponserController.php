<?php

namespace App\Http\Controllers\Admin;

use App\Sponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Purifier;
use Image;
use Storage;
use File;
class SponserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsers = Sponser::all();

        return view('admin.sponsers.index')->withSponsers($sponsers);
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
            'name' => 'required',
            'photo' => 'required',
        ]);

        $image = $request->file('photo');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/'.$filename);
        Image::make($image)->resize(300, 300)->save($location);

        $data['photo'] = $filename;

        if (Sponser::create($data)) {
            session()->flash('success', 'تمت الاضافة بنجاح');

            return redirect()->route('sponsers.index');
        } else {
            session()->flash('error', 'حصل خطاء اثناء الأضافة');

            return redirect()->route('sponsers.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sponser  $sponser
     * @return \Illuminate\Http\Response
     */
    public function show(Sponser $sponser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sponser  $sponser
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponser $sponser)
    {
        return view('admin.sponsers.edit')->withSponser($sponser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sponser  $sponser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponser $sponser)
    {
        $this->validate($request, [
            'name' => 'required',
            'photo' => 'sometimes',
        ]);

        $sponser->name = $request->name;

        if($request->hasFile('photo')){
            //Add the new photo
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(450, 355)->save($location);
            $oldFilename = $sponser['photo'];
            //Update the database
            $sponser['photo'] = $filename;
            //Delete the image
            File::delete('images/'.$oldFilename);
        }

        if ($sponser->save()) {
            session()->flash('success', 'تمت الاضافة بنجاح');

            return redirect()->route('sponsers.index');

        } else {
            session()->flash('error', 'حصل خطاء اثناء الأضافة');

            return redirect()->route('sponsers.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sponser  $sponser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponser $sponser)
    {
        if ($sponser->delete()) {
            session()->flash('success', 'تم الحذف بنجاح');

            return redirect()->route('sponsers.index');
        } else {
            session()->flash('error', 'حصل خطاء اثناء الحذف');

            return redirect()->route('sponsers.index');
        }
    }
}
