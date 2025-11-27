<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RememberTokenRequest;
use App\Http\Requests\LogoutRequest;
use App\Services\Interfaces\AuthInterfaceService;

class AuthController extends Controller
{
    public function __construct(
        protected AuthInterfaceService $authService
    ) {}

    public function viewRegister()
    {
        return view('auth.register');
    }

    public function viewLogin()
    {
        return view('auth.login');
    }

    public function viewUser()
    {
        return view('user.user_view');
    }

    public function postRegister(RegisterRequest $request): JsonResponse
    {
        $response  = $this->authService->register($request->validated());
        return response()->json($response);
    }

    public function postLogin(LoginRequest $request): JsonResponse
    {
        $response  = $this->authService->login($request->validated());
        return response()->json($response);
    }

    public function rememberMe(RememberTokenRequest $request): JsonResponse
    {
        $response  = $this->authService->rememberMe($request->validated());
        return response()->json($response);
    }

    public function postLogout(LogoutRequest $request)
    {
        $this->authService->logout($request->validated());
    }
}
