<?php

namespace App\Repositories\Interfaces;

use App\Models\WebUserModel;

interface AuthInterfaceRepository
{
    public function register(array $data): WebUserModel;
}
