<?php

namespace App\Services\Interfaces;

interface AuthInterfaceService
{
    public function register(array $data): array;

    public function login(array $data): array;

    public function rememberMe(array $data): array;

    public function logout(array $data);
}
