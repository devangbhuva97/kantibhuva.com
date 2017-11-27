<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\User;
use App\Software;
use Redirect;
use Storage;

class IndexController extends Controller
{
    public function index() {
    	$users = User::all();
    	$softwares = Software::all();
    	return view('index', ['users' => $users], ['softwares' => $softwares]);
    }

    public function editUser($user_id) {
    	$user=User::Where('user_id',$user_id)->get();
    	return view('index', ['users' => $users]);
    }

    public function updateUser($user_id, Request $request) {
    	User::Where('user_id',$user_id)->update([
                'role' => $request->role,
            ]);
    	return redirect('/');
    }

    public function deleteUser($user_id) {
    	User::where('user_id',$user_id)->delete();
    	return redirect('/');
    }

    public function storeSoftware(Request $request) {
  
        $file = $request->file('software');
    	$filename = $file->getClientOriginalName();
    	$path = $file->storeAs('public', $filename);
    	$time = Carbon::now();
        $software_id = sha1($time.$filename);

        $software = new Software;
        $software->software_id = $software_id;
        $software->name = $filename;
        $software->email = Auth::user()->email;
        $software->save();
        return redirect('/'); 
    }

    public function downloadSoftware($software_id) {
    	$software = Software::Where('software_id',$software_id)->first();
    	$filename = $software->name;
    	return response()->download(storage_path('app/public/'.$filename));
    }

    public function deleteSoftware($software_id) {
    	$software = Software::Where('software_id',$software_id)->first();
    	$filename = $software->name;
    	unlink(storage_path('app/public/'.$filename));
    	Software::Where('software_id',$software_id)->delete();
    	return redirect('/'); 
    }

}
