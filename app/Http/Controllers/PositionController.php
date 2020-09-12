<?php

namespace App\Http\Controllers;

use App\ViTri;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    private $position;
    //
    public function __construct(ViTri $position)
    {

        $this->position = $position;
    }

    public function index(){
        $all = $this->position->paginate(5);
        return view('admin.position.index',compact('all'));
    }


    //add
    public function addGet(){
        return view('admin.position.add');
    }

    public function addPost(Request $request){
        $this->position->create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('position.index')->with('thongbao','Thêm mới bản ghi thành công!');
    }


    //update
    public function updateGet($id){
        $getPosition = $this->position->find($id);
        return view('admin.position.update',compact('getPosition'));
    }

    public function updatePost(Request $request){
        $this->position->find($request->id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('position.index')->with('thongbao','Cập nhật bản ghi thành công!');
    }


    //delete
    public function delete($id){
        $respon = $this->position->find($id)->delete();
        if($respon == true){
            return redirect()->route('position.index')->with('thongbao','Xóa bản ghi thành công!');
        }
        else{
            return redirect()->route('position.index');
        }

    }





}
