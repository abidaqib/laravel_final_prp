<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use Session;

use Illuminate\Support\Facades\DB;

class TotalControle extends Controller
{
    public function home()
    {
    	return view('home');
    }
    public function logout(Request $req)
    {
    	$req->session()->flush();
        return redirect('home');
    }

    public function student()
    {
	    // if(!Session::has('userid')){
	    // 	return redirect('home');
    	// }else{
    		return view('student');
    	//}
    }
    public function admin()
    {
    	// if(!Session::has('userid')){
    	// 	return redirect('home');
    	// }else{
    		return view('admin');
    	//}
    }

    public function signUp(Request $req)
    {
    	$email=$req->input('email');
    	$password=$req->input('password');
    	$who=$req->input('who');
    	
    	$obj = new Info();
	        $obj->email     = $email;
	        $obj->password  = $password;
			$obj->who  		= $who;


	        if($obj->save()){
	           echo 'Successfully Inserted';
	           return redirect('home');
	       }
    
    }

    public function signIn(Request $req)
    {
    	$email=$req->input('email');
    	$password=$req->input('password');
    	$user = Info::where('email','=',$email)
	                     ->where('password','=',$password)
	                     ->first();
	      if($user){
	         Session::put('userid',$user->id);
	         if($user->who == 'admin'){
	         	return redirect('admin');
	         }elseif ($user->who =='student') {
	         return redirect('student');
	         }
    	}
    }

    public function update(Request $req)
    {
    	$email=$req->input('email');
    	$password=$req->input('password');
    	
    	/*DB::table('info')
            ->where('email', $email)
            ->update(['password' => $password]);
        return redirect('home');*/
        
       	DB::update('update infos set password = ? where email = ?',[$password,$email]);
        return redirect('home');
      
    }
}
