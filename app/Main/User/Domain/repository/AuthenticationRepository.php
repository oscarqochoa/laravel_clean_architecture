<?php

namespace App\Main\User\Domain\Repository;

interface AuthenticationRepositoryInterface
{
    public function authenticate();
    public function register();
}
