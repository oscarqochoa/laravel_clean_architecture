<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpGenExample extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure = "
        
        SELECT 
					cl.id,
					cl.client_name,
					cl.last_name,
					cl.dob,
					cl.phone,
					cl.email,
					cl.address,
					IF(SUM(pa.amount) IS NULL, 0, SUM(pa.amount))AS amount,
					COUNT(pa.amount) AS total,
					(
					SELECT json_arrayagg(JSON_OBJECT('amount', pa1.amount, 'transaction_date', pa1.tr_date)) 
					FROM payments pa1 WHERE pa1.client_id = cl.id
					) payments_array
				FROM clients cl
				LEFT JOIN payments pa ON cl.id = pa.client_id
				WHERE cl.state = 1
				GROUP BY cl.id
        ";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
