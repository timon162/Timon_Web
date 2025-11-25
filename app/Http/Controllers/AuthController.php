<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRquest;
use App\Services\Interfaces\AuthInterfaceService;

class AuthController extends Controller
{
    protected $authSevice;

    public function __construct(AuthInterfaceService $authSevice)
    {
        $this->authSevice = $authSevice;
    }

    public function viewRegister()
    {
        return view('Auth.register');
    }

    public function viewLogin()
    {
        return view('Auth.login');
    }

    public function postRegister(RegisterRquest $request)
    {
        $response  = $this->authSevice->register($request->validated());
        return response()->json($response);
    }
}
