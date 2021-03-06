<?php namespace Responsiv\Pay\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddInvoiceThrowawayFlag extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('responsiv_pay_invoices', 'is_throwaway')) {
            Schema::table('responsiv_pay_invoices', function($table)
            {
                $table->boolean('is_throwaway')->default(false);
            });
        }
    }

    public function down()
    {
    }
}
