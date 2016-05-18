<?php namespace App\Http\Controllers\App;

use App\Http\Controllers\AppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends AppController
{

    private $_rules = [

        'email'    => 'required',
        'password' => 'required',

    ];

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function index()
    {
        return view('app.sign-in.index');
    }

    protected function signIn(Request $request)
    {
        $this->validate($request, $this->_rules);

        $credentials = [
            'email'    => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->back();
    }
}
