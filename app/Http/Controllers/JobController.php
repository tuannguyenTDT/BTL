<?php

namespace App\Http\Controllers;

use App\NganhNghe;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\Job;

class JobController extends Controller
{
    //
    private $job;

    public function __construct(NganhNghe $job)
    {
        $this->job = $job;
    }
    public function index(){
        $all = $this->job->paginate(5);
        return view('admin.job.index',compact('all'));
    }

    //add
    public function addGet(){
        return view('admin.job.add');
    }

    public function addPost(Request $request){
        $this->job->create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('job.index')->with('thongbao','Thêm mới bản ghi thành công!');
    }


    //update
    public function updateGet($id){
        $getJob = $this->job->find($id);
        return view('admin.job.update',compact('getJob'));
    }

    public function updatePost(Request $request){
        $this->job->find($request->id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('job.index')->with('thongbao','Cập nhật bản ghi thành công!');
    }


    //delete
    public function delete($id){
        $respon = $this->job->find($id)->delete();
        if($respon == true){
            return redirect()->route('job.index')->with('thongbao','Xóa bản ghi thành công!');
        }
        else{
            return redirect()->route('job.index');
        }

    }

}
