<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest');
    }*/

    public function sendResetLinkEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);
 
        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );
  
        switch ($response) {
            case \Password::INVALID_USER:
                return response()->error($response, 422);
                break;
 
            case \Password::INVALID_PASSWORD:
                return response()->error($response, 422);
                break;
 
            case \Password::INVALID_TOKEN:
                return response()->error($response, 422);
                break;
            default: 
                return response()->success($response, 200);
        }
    }

    public function enviarLink(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email'
        ]);

        if( $user = User::where('email', $request->input('email') )->first() )
        {
            $token = str_random(64);

            DB::table(config('auth.passwords.users.table'))->insert([
                'email' => $user->email, 
                'token' => $token,
                
            ]);
            $data['link'] = 'http://control.coincoin.com.ve';
            $data['token'] = $token;
            $data['email'] = $user->email;
            $to = $user->email;
            
            if(!\Mail::send('mails.notificacion', $data, function  ($message) use ($user)  {
                $message->from('misaeboca@gmail.com', 'http://control.coincoin.com.ve');
                $message->to($user->email)->subject('Recuperación de clave');
            })){
                return redirect('/login');
            }
        }
    }
}
