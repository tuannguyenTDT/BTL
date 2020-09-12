<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    private $account;

    public function __construct(User $user)
    {
        $this->account = $user;
    }

    //index
    public function index(){
       $all = $this->account->paginate(5);
        return view('admin.account.index',compact('all'));
    }

    //detail
    public function detail($id){
        return view('admin.account.detail');
    }

    //add
    public function addGet(){
        return view('admin.account.add');
    }

    public function addPost(Request $request){
        if($request->password != $request->repeatPassword){
            return redirect()->route('account.addGet')->with('thongbao','Mật khẩu không trùng khớp!');
        }
        elseif ($this->account->where('email','=',$request->email)->exists()){
            return redirect()->route('account.addGet')->with('thongbao','Email đã tồn tại!');
        }
        else{
            $this->account->create([
                'name' => $request->name,
                'password' => bcrypt($request->password),
                'email' => $request->email,
                'phoneNum' => $request->phoneNum,
                'birthday' => $request->birthday,
                'roleId' => $request->role,
                'sex' => $request->sex,
                'address' => $request->address,
                'activeFlag' => 1,
            ]);
            return redirect()->route('account.index')->with('thongbao','Thêm mới bản ghi thành công!');
        }
    }

}
