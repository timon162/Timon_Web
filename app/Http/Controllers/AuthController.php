<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\RegisterRequest;
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

    public function postRegister(RegisterRequest $request): JsonResponse
    {
        $response  = $this->authService->register($request->validated());
        return response()->json($response);
    }
}
