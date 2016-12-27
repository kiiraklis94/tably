<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Team;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Request;
use Mpociot\Teamwork\Facades\Teamwork;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $inviteToken = Teamwork::getInviteFromAcceptToken( Request::session()->get('invite_token') ); //Gets invite token from session

        if($inviteToken == null){

            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'trial_ends_at' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
            ]);

            //Add newly created user to team
            $team = new Team();
            $team->owner_id = $user->id;
            $team->name = $user->name . "'s Team";
            $team->save();

            $user->attachTeam($team);

            //Attach "Owner" role(with id 2) to newly created user
            $user->attachRole(2);

        } else {

            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);

            //The next two lines are used instead of the acceptInvite() command to specify user/team.
            $user->attachTeam( $inviteToken->team );
            $inviteToken->delete();
        }

        return $user;

    }




}
