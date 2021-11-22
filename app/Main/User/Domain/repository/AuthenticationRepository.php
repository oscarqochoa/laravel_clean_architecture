<?php

namespace App\Main\User\Domain\repository;

interface AuthenticationRepositoryInterface
{
    public function authenticate();
    public function register();
}
