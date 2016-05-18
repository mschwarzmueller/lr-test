<?php namespace App\Http\Controllers\App;

use App\Http\Controllers\AppController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignUpController extends AppController
{

    private $_rules = [

        'email'    => 'required|email|unique:users',
        'fname'    => 'required|alpha|min:2|max:50',
        'lname'    => 'required|alpha|min:2|max:50',
        'password' => 'required|min:4|max:40|confirmed',

    ];

    public function __construct()
    {

        $this->middleware('guest');

    }

    protected function index()
    {

        return view('app.sign-up.index');

    }

    protected function signUp(Request $request)
    {

        $this->validate($request, $this->_rules);

        $credentials = [
            'email'    => $request->email,
            'fname'    => $request->fname,
            'lname'    => $request->lname,
            'password' => bcrypt($request->password),
        ];

        $User = new User($credentials);

        $User->save();

        Auth::login($User);

        return redirect()->route('dashboard');

    }

}
