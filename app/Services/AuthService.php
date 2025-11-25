<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
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
}
