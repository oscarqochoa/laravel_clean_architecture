<?php

namespace App\Main\ChangeOrder\Domain\Repository;

interface ChangeOrderRepositoryInterface{

    public function findOrders();
    public function findOrdersByUser();

}