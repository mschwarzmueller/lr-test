<?php namespace App\Http\Controllers\App;

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Auth;

class DashboardController extends AppController
{

    public function __construct()
    {

        $this->middleware('auth');

    }

    protected function index()
    {

        return view('app.dashboard.index');

    }

    protected function logout()
    {

        Auth::logout();

        return redirect()->route('/');

    }

}
