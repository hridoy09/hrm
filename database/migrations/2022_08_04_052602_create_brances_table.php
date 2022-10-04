<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brances', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('location');
            $table->text('controller_name');
            $table->text('acc_number');
            $table->integer('number');
            $table->date('shop_issue_date');
            $table->date('shop_expiry_date');
            $table->text('shop_file');
            $table->date('home_issue_date');
            $table->date('home_expiry_date');
            $table->text('home_file')->default(NULL);
            $table->text('Project');
            $table->text('senapid_decision');
            $table->text('starowstwo_decision');
            $table->text('book');
            $table->text('water_test');
            $table->text('vantilation_report');
            $table->text('garbage');
            $table->text('electronic_contract');
            $table->text('bhp1');
            $table->text('bhp2');
            $table->text('bhp3');
            $table->text('bhp4');
            $table->text('krs');
            $table->text('oil_contract');
            $table->text('login_info');
            $table->text('ali_baba_contract');
            $table->text('beverage_contract');
            $table->string('email');
            $table->string('password');
            $table->integer('Status')->default(1);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brances');
    }
};
