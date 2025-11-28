<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\WebUser;
use App\Repositories\Interfaces\AuthInterfaceRepository;
use App\Services\Interfaces\AuthInterfaceService;

class AuthService implements AuthInterfaceService
{
    public function __construct(protected AuthInterfaceRepository $authRepository) {}

    public function register(array $data): array
    {
        $data['password'] =  Hash::make($data['password']);
        $data = $this->authRepository->register($data);
        $token = $data->createtoken('token')->plainTextToken;

        return [
            'data' => $data,
            'token' => $token,
            'mess' => 'đăng ký thành công'
        ];
    }

    public function login(array $data): array
    {
        $credentials = [
            'email' => $data['email'],
            'password' => $data['password'],
        ];
        if (!Auth::attempt($credentials)) {
            return [
                'data' => null,
                'token' => null,
                'mess' => 'sai thông tin đăng nhập'

            ];
        }

        $user = Auth::user();
        $token = $user->createToken('token')->plainTextToken;
        $addToken = [
            'email' => $data['email'],
            'token' => $token,
        ];
        if ($data['is_remember'] == 1) {
            $data = $this->authRepository->rememberToken($addToken);
        }
        return [
            'data' => $data,
            'token' => $token,
            'mess' => 'đang nhập thành công'
        ];
    }

    public function rememberMe(array $data): array
    {
        if ($data['remember_token'] != null) {
            $user = $this->authRepository->rememberMe($data);
            if (!$user) {
                return [
                    'data' => null,
                    'mess' => 'undefined'
                ];
            }
            return [
                'data' => $user,
                'mess' => 'success'
            ];
        }
        return [
            'data' => null,
            'mess' => 'undefined'
        ];
    }

    public function logout(array $data)
    {
        $this->authRepository->logout($data);
    }
}
