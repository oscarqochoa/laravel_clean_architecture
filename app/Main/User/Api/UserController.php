<?php

namespace App\Main\User\Api;

use App\Http\Controllers\Controller;

use App\Main\User\Domain\repository\UserAccountRepositoryInterface;

class UserController extends Controller
{

    protected $userAccountRepositoryInterface;

    public function __construct(
        UserAccountRepositoryInterface $pUserAccountRepositoryInterface
    ) {
        $this->userAccountRepositoryInterface = $pUserAccountRepositoryInterface;
    }

    
}
