<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;



class RoleController extends Controller
{
    //

    private $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    //index
    public function index(){
        $all = $this->role->paginate(5);
        return view('admin.role.index',compact('all'));
    }

    //add
    public function addGet(){
        return view('admin.role.add');
    }

    public function addPost(Request $request){
        $this->role->create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('role.index')->with('thongbao','Thêm mới bản ghi thành công!');
    }


    //update
    public function updateGet($id){
        $getRole = $this->role->find($id);
        return view('admin.role.update',compact('getRole'));
    }

    public function updatePost(Request $request){
        $this->role->find($request->id)->update([
            'name' => $request->name,
            'description' => $request->description
            ]);

        return redirect()->route('role.index')->with('thongbao','Cập nhật bản ghi thành công!');
    }


    //delete
    public function delete($id){
        $respon = $this->role->find($id)->delete();
        if($respon == true){
            return redirect()->route('role.index')->with('thongbao','Xóa bản ghi thành công!');
        }
        else{
            return redirect()->route('role.index');
        }

    }


}
