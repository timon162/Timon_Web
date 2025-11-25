<?php

namespace App\Repositories;

use App\Repositories\Interfaces\AuthInterfaceRepository;
use App\Models\WebUserModel;

class AuthRepository implements AuthInterfaceRepository
{
    public function register(array $data): WebUserModel
    {
        return WebUserModel::create($data);
    }
}
