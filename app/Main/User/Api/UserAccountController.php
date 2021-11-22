<?php

namespace App\Main\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Main\User\Domain\repository\UserAccountRepositoryInterface;

class UserAccountController extends Controller
{
    protected $userAccountRepositoryInterface;

    public function __construct(
        UserAccountRepositoryInterface $pUserAccountRepositoryInterface
    ) {
        $this->userAccountRepositoryInterface = $pUserAccountRepositoryInterface;
    }

    public function findAccounts(Request $request){
        return $this->userAccountRepositoryInterface->findAccounts("");
    }

    
}
