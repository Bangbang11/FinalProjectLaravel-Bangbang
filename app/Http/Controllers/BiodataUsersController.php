<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormBiodataRequest;
use App\Biodata;

class BiodataUsersController extends Controller
{
    public function store(FormBiodataRequest $request)
    {
        $pathImage = '/photos/user_photos/';
        $pathCV = '/pdf/cv/';
        $biodata = Biodata::where('id_user',$request->id_user)->first();
        if ($request->photo) {
            $user_photos = 'image_user-'.str_random(5).time().'.'.$request->file('photo')->getClientOriginalExtension();
            //rename file yang di upload menjadi image_articlerandom.extensiondile
            $request->photo->move(public_path('photos/user_photos/'), $user_photos);
            //path lokasi penyimpanan file public/photos/user_photos/
            $biodata->photo = $user_photos;
            //simpan nama file image ke field photo
        }
        if ($request->cv) {
            $user_cv = 'cv_user-'.str_random(5).time().'.'.$request->file('cv')->getClientOriginalExtension();
            //rename file yang di upload menjadi image_articlerandom.extensiondile
            $request->cv->move(public_path('pdf/cv/'), $user_cv);
            //path lokasi penyimpanan file public/image/article/
            $biodata->cv = $user_cv;
            //simpan nama file image ke field article_image
        }
        $biodata->address = $request->address;
        $biodata->contact_no = $request->contact_no;
        $biodata->gender = $request->gender;
        $biodata->education = $request->education;
        $biodata->nationality = $request->nationality;
        $biodata->save();
        return redirect()->route('home',$request->id_user);
    }
}
