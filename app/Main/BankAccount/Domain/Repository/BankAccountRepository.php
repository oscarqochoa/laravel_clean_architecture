<?php

namespace App\Main\BankAccount\Domain\Repository;

interface BankAccountRepositoryInterface
{
    public function findBankAccounts();
    public function findBankAccountsByUser();
    public function registerBankAccount();
    public function updateBankAccount();
    public function deleteBankAccount();
}
