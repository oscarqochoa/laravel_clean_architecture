<?php

namespace App\Main\User\Domain\Repository;

interface UserAccountRepositoryInterface{

    public function findAccounts(string $user);
    public function findAccountsByUser();
    public function registerAccount();
    public function updateAccount();
    public function deleteAccount();

}