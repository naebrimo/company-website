<?php

namespace App\Http\Controllers\Dashboard;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
        $this->page = Page::where('id', 1)->first();
    }

    public function showLoginForm()
    {
        $navlinks = $this->page->navlinks()->get();
        $carousels = null;

        return view('dashboard/login', compact('navlinks', 'carousels'));
    }

    public function loginRedirect()
    {
        return redirect(route('index.dashboard.login'));
    }

    public function logoutRedirect()
    {
        return redirect(route('index.dashboard.logout'));
    }

    protected function login(Request $request)
    {
        if(filter_var($request->usernameOrEmail, FILTER_VALIDATE_EMAIL))
        {
            $validateParams = [
                'usernameOrEmail' => 'required|email',
                'password' => 'required|string|min:8'
            ];
            $credentials = [
                'email' => $request->usernameOrEmail,
                'password' => $request->password,
                'active' => TRUE,
            ];
        }
        else
        {
            $validateParams = [
                'usernameOrEmail' => 'required|string|min:3',
                'password' => 'required|string|min:8'
            ];
            $credentials = [
                'username' => $request->usernameOrEmail,
                'password' => $request->password,
                'active' => TRUE,
            ];
        }
        $this->validate($request, $validateParams);

        $remember = $request->remember;
        if(Auth::guard('admin')->attempt($credentials, $remember))
        {
            return redirect()->intended($this->redirectTo);
        }
        return redirect()
            ->back()
            ->withInput($request->only('usernameOrEmail', 'remember'))
            ->withErrors(['Access Denied.']);
    }

    protected function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return $this->loggedOut($request) ?: redirect('/');
    }
    protected function loggedOut(Request $request)
    {
        //
    }

}
