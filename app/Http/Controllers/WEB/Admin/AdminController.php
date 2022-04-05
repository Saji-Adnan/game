<?php

namespace App\Http\Controllers\WEB\Admin;


use App\Models\Admin;
use App\Models\City;
use App\Models\Permission;
use App\Models\Setting;
use App\Models\UserPermission;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Notifications\NewPostNotification;

use Illuminate\Validation\Rule;
use Mockery\Exception;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Image;

class AdminController extends Controller
{

    public function image_extensions(){

        return array('jpg','png','jpeg','gif','bmp','pdf');

    }


    public function index(Request $request)
    {
      //
    }

    public function destroy($id)
    {
     //
    }


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



    public function edit($id)
    {
    //

    }


    public function update(Request $request, $id)
    {
      //
    }



    public function edit_password(Request $request, $id)
    {
      //
    }


    public function update_password (Request $request, $id)
    {
        //dd($request->all());
        $users_rules=array(
            'password'=>'required|min:6',
            'confirm_password'=>'required|same:password|min:6',
        );
        $users_validation=Validator::make($request->all(), $users_rules);

        if($users_validation->fails())
        {
            return redirect()->back()->withErrors($users_validation)->withInput();
        }
        $user = Admin::findOrFail($id);
        $user->password = bcrypt($request->password);
        $user->save();



        return redirect()->back()->with('status', __('cp.update'));
    }



    public function editMyProfile()
    {
        $item = Admin::findOrFail(auth()->guard('admin')->user()->id);
        return view('admin.admin.edit_profile',compact('item'));
    }




    public function updateProfile(Request $request)
    {
        $newAdmin= Admin::findOrFail(auth()->guard('admin')->user()->id);

        $validator = Validator::make($request->all(), [
            'email'=>'required|string',
            'name'=>'required|string',
            'mobile'=>'required|digits_between:8,12|unique:admins,mobile,'.$newAdmin->id,

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $check = Admin::findOrFail(auth()->guard('admin')->user()->id);
        if(!$check){
            $validator=[__('api.whoops')];
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $newAdmin->name=$request->name;
        $newAdmin->mobile=$request->mobile;
        $newAdmin->email=$request->email;

        $newAdmin->save();

       return redirect()->back()->with('status', __('cp.update'));

    }


    public function changeMyPassword()
    {
        $item = Admin::findOrFail(auth()->guard('admin')->user()->id);
        return view('admin.admin.changeMyPassword',compact('item'));
    }

    public function updateMyPassword (Request $request)
    {

        //dd($request->all());
        $users_rules=array(
            'password'=>'required|min:6',
            'confirm_password'=>'required|same:password|min:6',
        );
        $users_validation=Validator::make($request->all(), $users_rules);

        if($users_validation->fails())
        {
            return redirect()->back()->withErrors($users_validation)->withInput();
        }
        $user = Admin::findOrFail(auth()->guard('admin')->user()->id);
        $user->password = bcrypt($request->password);
        $user->save();



        return redirect()->back()->with('status', __('cp.update'));
    }

}
