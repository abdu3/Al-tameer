<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Dotenv\Validator;
use GrahamCampbell\ResultType\Success;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{

    protected function getContactRules(){

        return $rules =[
            'name'=>'required',
            'type'=>'required',
            'PhoneNum'=>'required',
            'whatsappNum'=>'required',
            'message'=>'required'
        ];
    }
    protected function getContactMessages(){

        return $messages =[
            'name.required'=>__('main.name required'),
            'type.required'=>__('main.type required'),
            'PhoneNum.required'=>__('main.PhoneNum required'),
            'whatsappNum.required'=>__('main.whatsappNum required'),
            'message.required'=>__('main.message required')
        ];
    }

    public function save(Request $request)
    {

        $rules=$this->getContactRules();
        $messages=$this->getContactMessages();

         $validate=FacadesValidator::make($request->all(),$rules,$messages);

         if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput($request->all());
         }

        //  dd($request->PhoneNum);
        Contact::create([
            'name'=>$request->name,
            'type'=>$request->type,
            'location'=>$request->location,
            'phoneNum'=>$request->PhoneNum,
            'whatsappNum'=>$request->whatsappNum,
            'message'=>$request->message
        ]);


      return back()->with('success',__('main.successMessage')); ;

    }

    public function show(){

        return view('admin.dashboard',['messages'=>Contact::all()]);
    }

    public function signup()
    {
        return view('session.login');
    }

    public function login()
    {

             // validate the request
             $attribute=request()->validate([
                'email'=> 'required|email',
                'password'=>'required'
            ]);

            //  attempt to authenticate and log in the user
            // based on the provided credentials
            if(auth()->attempt($attribute)) {

                session()->regenerate();
                // redirect with a session flash message
                 return redirect('/admin')->with('success','Welcome Back!');
            }

            // auht field

            // throw ValidationException::withMessages([
            //     'email' => 'Your provided credentials could not be verified.'
            // ]);

            return redirect()->back()->withErrors(['email'=>'Invalid Credentails']);
    }


    public function reset(){
        return view('session.reset-password');
    }

    public function changePassword(Request $request) {

        $validatedData = $request->validate([
            'new-email' => 'required',
            'new-password' => 'required',
        ]);
        // dd($request->get('current-password'));
        // if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
        //     // The passwords matches
        //     return redirect()->back()->withErrors("current-password","Your current password does not matches with the password.");
        // }
        // if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
        //     // Current password and new password same
        //     return redirect()->back()->with("error","New Password cannot be same as your current password.");
        // }



        //Change Password
        $user = Auth::user();
        $user->email=$request->get('new-email');
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");
    }


    public function logout(){

            // auth()->logout();
            Auth::logout();

            return redirect("/login");

    }


}
