<?php

namespace App\Repositories\Interfaces;

use App\Models\WebUser;

interface AuthInterfaceRepository
{
    public function register(array $data): WebUser;

    public function rememberToken(array $data): ?WebUser;

    public function rememberMe(array $data): ?WebUser;

    public function logout(array $data);
}
