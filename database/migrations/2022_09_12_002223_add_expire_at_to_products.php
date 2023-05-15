<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExpireAtToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('products', 'expire_at')) {
            Schema::table('products', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->date('expire_at')->nullable()->after('is_active');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('products', 'expire_at')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('expire_at');
            });
        }
    }
}
