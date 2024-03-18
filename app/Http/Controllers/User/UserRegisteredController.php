<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Hash;
use App\Models\User;
use App\Models\UserAddress;

class UserRegisteredController extends Controller
{
    
    public function user_dashboard(){
        return view('users.dashboard');
    } 


    public function index(){
        
        $id = Auth::user()->id;
            
        $users = User::where('id','=',$id)
                      ->where('status','!=','3')->get();       
        return view('users.index')->with('users',$users);

    }
    

    public function addEditDetails($user_id){
        $user = User::findorFail($user_id)->UserProfile;
        return view('users.addedit-detail',compact('user','user_id'));
    }

    public function storeOrUpdateDetail(Request $request,$user_id){

    $user = User::findOrFail($user_id);

    $user->UserProfile()->updateOrCreate(
        [
            'user_id' => $user_id,
            
        ],
        [
             'father_name'   => $request->father_name,
             'mother_name'       => $request->mother_name,
            
        ]
    );
    return redirect('users_index')->with('message','User Profile Updated Successfully');

    }


    public function address_index(){
        $id = Auth::user()->id;
            
        $addresses = UserAddress::where('user_id','=',$id)
                      ->paginate(5);
        return view('address.index',compact('addresses'));
    } 

    public function create(){      
        $users = Auth::user()->id; 
        $user_name = Auth::user()->name;
        return view('address.create',compact('users','user_name'));
    }


    public function store(Request $request){
        
        //1st Method
       $user = User::findOrFail($request->user_id);
       $user->UserAddress()->create([
            'address1' => $request->address1,
            'address2' => $request->address2,
            'pincode' => $request->pincode,
            
        ]);
        return redirect('addresses')->with('message','address added successfully');
    }


     public function edit(int $address){
        $users = Auth::user()->id; 
        $user_name = Auth::user()->name;
        $address = UserAddress::findOrFail($address);
        return view('address.edit',compact('users','user_name','address'));
    }


     public function update(Request $request, $address_id){
        
        //METHOD1

        $user = User::findOrFail($request->user_id);
          
        $user->UserAddress()->where('id',$address_id)->update([
            'user_id' => $request->user_id,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'pincode' => $request->pincode,
            
        ]);

        return redirect('addresses')->with('message','address updated successfully');

    }












   

}
