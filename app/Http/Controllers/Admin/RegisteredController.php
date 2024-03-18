<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Hash;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserProfile;


class RegisteredController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');   
    }

    public function index(){
        $users = User::where('status','!=','3')->paginate(5);
                
        return view('admin.user_address')->with('users',$users);
    }

    public function uaddress(){
        $user_addresses = UserAddress::paginate(5);           
        $user_profiles = UserProfile::all();           
        return view('admin.user_address')->with('user_addresses',$user_addresses,'user_profiles',$user_profiles);
    }

        public function search(Request $request){

        $search = $request->search;

        $user_addresses =UserAddress::where(function($query) use ($search){

            $query->where('address1','like',"%$search%")
            ->orWhere('address2','like',"%$search%")
            ->orWhere('pincode','like',"%$search%");

            })

           ->orWhereHas('user',function($query) use ($search){
                $query->where('name','like',"%$search%");
            })

           ->paginate(5);
            
            return view('admin.user_address',compact('user_addresses','search'));

    }


   
}
