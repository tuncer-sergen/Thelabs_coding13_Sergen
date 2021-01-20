<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Newsletter;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailInscription;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'prenom' => ['required', 'string', 'max:255'],
            'poste' => ['required', 'string', 'max:255'],
            'src' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $mail = NewsLetter::all();
        $index;

        foreach($mail as $element){
            if($element->email == $data['email']){
               $index = $element->id; 
            break;
            }else{
                $index = -1;
            }
        }
        if ($mail->count() == 0) {
            $newEntry = new NewsLetter;
            $newEntry->email = $data['email'];
            $newEntry->save();
        } else if ($index === -1) {
            $newEntry = new NewsLetter;
            $newEntry->email = $data['email'];
            $newEntry->save();
        }

        return User::create([
            'name' => $data['name'],
            'src' => $data['src']->hashName(),
            $data['src']->storePublicly('img/avatar/','public'),
            $data['src']->storePublicly('img/team/','public'),
            'prenom' => $data['prenom'],
            'poste' => $data['poste'],
            'email' => $data['email'],
            'role_id'=>1,
            'password' => Hash::make($data['password']),
            Mail::to($data['email'])->send(new MailInscription($data)),
            ]);
    }
}
