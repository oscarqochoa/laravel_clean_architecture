<?php

namespace App\Main\BankAccounts\Domain\Repository;

interface CompanyBankAccountsRepositoryInterface
{
    public function findBankAccounts();
    public function findBankAccountsByProfile();
    public function registerBankAccount();
    public function updateBankAccount();
    public function deleteBankAccount();
}
