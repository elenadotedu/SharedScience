<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Foundation\Auth\ResetsPasswords;
use Spatie\Permission\Models\Role;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Password;

class UserController extends Controller
{
    //use ResetsPasswords;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // check if authorized
        if (Auth::getUser()->cannot('view users')) {
            abort(403);
        }

        $records = User::where('id', '<>', Auth::getUser()->id)->get();
        return view("users.index", compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::getUser()->cannot('edit users')) {
            abort(403);
        }

        $role_list = Role::lists('name', 'name')->all();

        return view('users.create', compact('role_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::getUser()->cannot('edit users')) {
            abort(403);
        }

        $this->validate($request, [
            'email' => 'required|email',
            'role' => 'required'
        ]);

        $input = array_except($request->all(), '_token');

        $user = User::where('email', $input['email'])->first();

        if (!$user)
        {
            // create user
            $user = User::create([
                'confirmed' => false,
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'email' => $input['email'],
                'password' => bcrypt(str_random()),
            ]);

            $user->assignRole($input['role']);
        }
        else {
            //return back()->with('warning', 'User with this email already exists.');
        }

        $broker = $this->getBroker();

        $response = Password::broker($broker)->sendResetLink($request->only('email'), function (Message $message) {
            $message->subject('Welcome, New User!');
            $message->newUser = true;
        });

        //return $this->sendResetLinkEmail($request);

        switch ($response) {
            case Password::RESET_LINK_SENT:
                return back()->with('success', 'User created, they will receive an email shortly.');

            case Password::INVALID_USER:
            default:
                return back()->with('warning', 'Error sending email. User can try to login and click Reset Password link.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // find driver by id
        $user= User::find($id);

        // check if authorized
        if (Auth::getUser()->cannot('edit users')) {
            abort(403);
        }

        return view('users.edit', compact('user', 'token'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last' => 'required',
            'email' => 'required|unique:users,name,'.$id,
        ]);

        $input = array_except($request->all(), '_token');

        $user = User::find($id);

        $user->update($input);

        return redirect('users')->with('success', 'User updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // check if authorized
        if (Auth::getUser()->cannot('delete users')) {
            abort(403);
        }

        $user = User::find($id);

        $user->delete();

        //go back to the template list, but display message
        return redirect('users')->with('success', 'User deleted');
    }

    /**
     * Get the broker to be used during password reset.
     *
     * @return string|null
     */
    public function getBroker()
    {
        return property_exists($this, 'broker') ? $this->broker : null;
    }
}
