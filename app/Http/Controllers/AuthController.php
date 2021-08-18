<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use App\Http\Requests\ResetPassword;

use Str;
use Session;
use Mail;
use Validate;
use Hash;
use Auth;

class AuthController extends Controller
{
    
    public function teacher_index(Request $request)
    {
        return view('teacher.auth.register');
    }

    public function teacher_store(Request $request){
        // dd($request->all());

        $user = request()->validate([
            'name'              => 'required|alpha_dash|unique:users',
            'email'             => 'required|unique:users',
         // 'type'              => 'required',
            'password'          => 'required_with:confirm_password|same:confirm_password',
            'CaptchaCode'       => 'required_with:current_captcha|same:current_captcha'
        ]);
            $user               = new User;
            $user->name         = trim($request->name);
            $user->email        = trim($request->email);
            $user->password     = Hash::make($request->password);
            $user->remember_token = Str::random(50);
            $user->is_role      = 4;
            //$user->is_admin   = $is_admin;
        //    $user->created_date = time();
            $user->save();

            $this->send_verification_mail($user);

            return redirect('login')->with('success', 'This email is not verified yet, please check your inbox to activate your account!');
    }

    public function send_verification_mail($user){
        // echo $user;
        // die();
         Mail::to($user->email)->send(new RegisterMail($user));
    }

    public function login(Request $request){
           return view('auth.login');
    }

    public function login_auth(Request $request){

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if(!empty(Auth::User()->status))
            {
                if(Auth::User()->is_role =='1' || Auth::User()->is_role =='2'){
                    return redirect()->intended('admin/dashboard');
                } else if (Auth::User()->is_role =='3'){
                    return redirect()->intended('school/dashboard');
                } else if (Auth::User()->is_role =='4'){
                  return redirect()->intended('teacher/dashboard');
                }
            }
            else
            {
                $user_id = Auth::user()->id;
                Auth::logout();
                $user = User::find($user_id);

//                $this->send_verification_mail($user);

                return redirect('login')->with('success', 'This email is not verified yet, please check your inbox to activate your account!');
            }

        } else {
            return redirect()->back()->with('error', 'Please enter the correct credentials');
        }
    }

    public function activate($token){
        $user = User::where('remember_token', '=', $token);
        /*dd($user);*/
        $user = $user->first();
        $user->status = 1;
      //$user->is_delete = 0;
        $user->save();
        return redirect('login')->with('success', 'Thank you. your account has been verified.');
    }

   public function logout()
    {
        Auth::logout();
        return redirect(url('login'));
    }

    public function forgot(Request $request){
         return view('auth.forgot');
    }

    public function forgot_auth(Request $request)
    {
          $user = User::where('email','=',$request->email)->first();
          if (empty($user)) {
              return redirect()->back()->with('error', 'Email not found in the system.');
          }

          $user->remember_token = Str::random(50);
          $user->save();
          Mail::to($user->email)->send(new ForgotPasswordMail($user));
          return redirect()->back()->with('success', 'Password has been reset. and sent to you mailbox');
    }



    public function reset($token,Request $request)
    {
        $data['meta_title'] = 'Reset Password';
        $user = User::where('remember_token', '=', $token);
        if ($user->count() == 0) {
          abort(403);
        }
        $user = $user->first();
        
        $data['token'] = $token;
        return view('auth.reset', $data);
   }


   public function reset_auth($token,ResetPassword $request)
   {
        $user = User::where('remember_token', '=', $token);
        if ($user->count() == 0) {
          abort(403);
        }

        $user = $user->first();
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('login')->with('success', 'Password has been reset.');
   }


}