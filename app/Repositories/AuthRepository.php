<?php

namespace App\Repositories;

use App\Repositories\Interfaces\AuthInterfaceRepository;
use App\Models\WebUser;

class AuthRepository implements AuthInterfaceRepository
{
    public function register(array $data): WebUser
    {
        return WebUser::create($data);
    }

    public function rememberToken(array $data): ?WebUser
    {
        $user = WebUser::where('email', $data['email'])->first();

        if (!$user) {
            return null;
        }

        $user->remember_token = $data['token'];
        $user->save();

        return $user;
    }

    public function rememberMe(array $data): ?WebUser
    {
        return WebUser::where('remember_token', $data['remember_token'])->first();
    }

    public function logout(array $data)
    {
        $user = WebUser::where('remember_token', $data['logout_token'])->first();

        if (!$user) {
            return null;
        }

        $user->remember_token = null;
        $user->save();
    }
}
