<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('admin.settings.edit')->withSetting($setting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $this->validate($request, [
            'logo_ar' => 'required',
            'logo_en' => 'required',
            'about_ar' => 'required',
            'about_en' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'location_ar' => 'required',
            'location_en' => 'required',
        ]);

        $setting->about_ar = $request->about_ar;
        $setting->about_en = $request->about_en;
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->location_ar = $request->location_ar;
        $setting->location_en = $request->location_en;

        if($request->hasFile('logo_ar')){
            //Add the new photo
            $image = $request->file('logo_ar');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(450, 355)->save($location);
            $oldFilename = $setting['logo_ar'];
            //Update the database
            $setting['logo_ar'] = $filename;
            //Delete the image
            File::delete('images/'.$oldFilename);
        }

        if($request->hasFile('logo_en')){
            //Add the new photo
            $image = $request->file('logo_en');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(450, 355)->save($location);
            $oldFilename = $setting['logo_en'];
            //Update the database
            $setting['logo_en'] = $filename;
            //Delete the image
            File::delete('images/'.$oldFilename);
        }

        if ($setting->save()) {
            return response()->json([],222);
            session()->flash('success', 'تمت الاضافة بنجاح');

            return redirect()->route('settings.index');

        } else {
            return response()->json([],222);

            session()->flash('error', 'حصل خطاء اثناء الأضافة');

            return redirect()->route('settings.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
