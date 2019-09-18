<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Blog;
use App\Sponser;
use App\Member;
use App\Contact;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $setting = Setting::findOrFail(1);
        $blogs = Blog::latest()->limit(3)->get();
        $sponsers = Sponser::all();

        return view('index')->withSetting($setting)->withBlogs($blogs)->withSponsers($sponsers);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function member(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'email',
            'phone' => 'required',
            'country' => 'required',
            'education' => 'required',
            'type' => 'required',
        ]);

        if (Member::create($data)) {
            session()->flash('success', 'تمت الاضافة بنجاح');

            return redirect()->route('home');
        } else {
            session()->flash('error', 'حصل خطاء اثناء الأضافة');

            return redirect()->route('home');
        }

    }

    public function contact()
    {
        $setting = Setting::findOrFail(1);
        return view('contact')->withSetting($setting);
    }

    public function join(Request $request)
    {

        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'email',
            'join' => 'required',
            'subject' => 'required',
            'message' => 'required',
            ]);
            // dd($data['file']);

        if($request->hasFile('file')){

            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path().'/files/', $filename);

            $data['file'] = $filename;
        }

        if (Contact::create($data)) {
            session()->flash('success', 'تمت الاضافة بنجاح');

            return redirect()->route('contact');
        } else {
            session()->flash('error', 'حصل خطاء اثناء الأضافة');

            return redirect()->route('contact');
        }
    }
}
