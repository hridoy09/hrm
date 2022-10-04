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
        if(!Schema::hasTable('employees')){
            Schema::create('employees', function (Blueprint $table) {
                $table->id();
                $table->text('employee_code');
                $table->text('name');
                $table->text('sur_name');
                $table->date('bd_date');
                $table->text('father_name');
                $table->text('mother_name');
                $table->text('nationality');
                $table->text('position');
                $table->text('em_contact');
                $table->text('company_name');
                $table->text('contact_type');
                $table->text('salary');
                $table->text('work_hour');
                $table->date('pp_issue_date');
                $table->date('pp_expiry_date');
                $table->text('passport_no');
                $table->text('passport_file')->default(NULL);
                $table->text('update_passport_file')->default(NULL);;
                $table->date('rd_issue_date');
                $table->date('rd_expiry_date');
                $table->text('rd_file')->default(NULL);;
                $table->text('d_residence_file')->default(NULL);;
                $table->date('work_issue_date');
                $table->date('work_expiry_date');
                $table->text('work_file')->default(NULL);;
                $table->date('zus_date');
                $table->text('zus_dec');
                $table->date('work_contact_issue_date');
                $table->date('work_contact_expiry_date');
                $table->text('work_contact_file')->default(NULL);;
                $table->text('health_doc')->default(NULL);;
                $table->text('attachment1')->default(NULL);;
                $table->text('attachment2')->default(NULL);;
                $table->text('attachment3')->default(NULL);;
                $table->text('attachment4')->default(NULL);;
                $table->text('attachment5')->default(NULL);;
                $table->text('attachment6')->default(NULL);;
                $table->text('attachment7')->default(NULL);;
                $table->text('attachment8')->default(NULL);;
                $table->text('attachment9')->default(NULL);;
                $table->text('attachment10')->default(NULL);;
                $table->text('pasel_no');
                $table->text('shop_id');
                $table->text('shop_location_id');
                $table->text('accommodation_address');
                $table->text('pre_company_name');
                $table->text('exp_details')->default(NULL);;
                $table->text('contact_no');
                $table->text('email');
                $table->text('reference');
                $table->string('marital_status');
                $table->text('image')->default(NULL);;
                $table->integer('Status')->default(1);
                $table->timestamps();
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
        Schema::dropIfExists('employees');
    }
};
