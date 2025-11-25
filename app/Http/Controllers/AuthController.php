<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRquest;
use App\Services\Interfaces\AuthInterfaceService;

class AuthController extends Controller
{
    public function __construct(
        protected AuthInterfaceService $authSevice
    ) {}

    public function viewRegister()
    {
        return view('auth.register');
    }

    public function viewLogin()
    {
        return view('auth.login');
    }

    public function postRegister(RegisterRquest $request)
    {
        $response  = $this->authSevice->register($request->validated());
        return response()->json($response);
    }
}
