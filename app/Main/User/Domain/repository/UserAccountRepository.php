<?php

namespace App\Main\User\Domain\repository;

interface UserAccountRepositoryInterface{

    public function findAccounts(string $user);
    public function findAccountsByUser();
    public function registerAccount();
    public function updateAccount();
    public function deleteAccount();

}