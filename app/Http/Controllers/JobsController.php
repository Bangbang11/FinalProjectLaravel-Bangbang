<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use App\Http\Requests\JobUpdateRequest;
use App\Category;
use App\Job;

class JobsController extends Controller
{
    public function index()
    {
        $job = Job::all();
        return view('admin.indexJob')->with('job', $job);
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.createJob')->with('category', $category);
    }

    public function store(JobRequest $request)
    {
        // Job::create($request->all());
        // return redirect()->route('job.index');
        $pathImage = '/photos/company_photos/';
        
        $modelJob = new Job();
        if ($request->photo) {
            $company_photos = 'image_company-'.str_random(5).time().'.'.$request->file('photo')->getClientOriginalExtension();
            //rename file yang di upload menjadi image_articlerandom.extensiondile
            $request->photo->move(public_path('photos/company_photos/'), $company_photos);
            //path lokasi penyimpanan file public/image/article/
            $modelJob->photo = $company_photos;
            //simpan nama file image ke field article_image
        }
        $id_category = $request->get('id_category');
        $name = $request->get('name');
        $company = $request->get('company');
        $address = $request->get('address');
        $contact = $request->get('contact');
        $salary = $request->get('salary');
        $benefit = $request->get('benefit');
        $min_experience = $request->get('min_experience');
        $description = $request->get('description');
        $modelJob->id_category = $id_category;
        $modelJob->name = $name;
        $modelJob->company = $company;
        $modelJob->address = $address;
        $modelJob->contact = $contact;
        $modelJob->salary = $salary;
        $modelJob->benefit = $benefit;
        $modelJob->min_experience = $min_experience;
        $modelJob->description = $description;
        $modelJob->save();
        //Job::create($request->all());
        return redirect()->route('job.index');
    }

    public function edit($id)
    {
        $job = Job::find($id);
        $nameCategory = Category::find($job->id_category);
        $category = Category::all();
        return view('admin.editJob')->with('category',$category)->with('job',$job)->with('namecategory',$nameCategory);
    }

    public function update(JobUpdateRequest $request, $id)
    {
        $pathImage = '/photos/company_photos/';
        $job = Job::find($id);
        $oldPhoto = public_path('photos/company_photos/'.$job->photo);
        if ($request->photo) {
            $company_photos = 'image_company-'.str_random(5).time().'.'.$request->file('photo')->getClientOriginalExtension();
            //rename file yang di upload menjadi image_articlerandom.extensiondile
            $request->photo->move(public_path('photos/company_photos/'), $company_photos);
            //path lokasi penyimpanan file public/image/article/
            $job->photo = $company_photos;
            //simpan nama file image ke field article_image
        }
        $id_category = $request->get('id_category');
        $name = $request->get('name');
        $company = $request->get('company');
        $address = $request->get('address');
        $contact = $request->get('contact');
        $salary = $request->get('salary');
        $benefit = $request->get('benefit');
        $min_experience = $request->get('min_experience');
        $description = $request->get('description');
        $job->id_category = $id_category;
        $job->name = $name;
        $job->company = $company;
        $job->address = $address;
        $job->contact = $contact;
        $job->salary = $salary;
        $job->benefit = $benefit;
        $job->min_experience = $min_experience;
        $job->description = $description;
        if ($job->save()) {
            if (file_exists($oldPhoto)) {
                unlink($oldPhoto);
            }
        } else {
            Session::flash('error','Failed to modify Photo');
        }
        return redirect()->route('job.index');
    }

    public function destroy($id){
        Job::destroy($id);
        return redirect()->route('job.index');
    }
}
