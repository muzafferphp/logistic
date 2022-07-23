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
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
			$table->string('company_name');
			$table->string('postal_address');
			$table->string('abn');
			$table->string('contact_number');
			$table->string('phone_number');
			$table->string('email');
			$table->string('key_contact');
			$table->string('user_id');
			$table->string('user_role');
			$table->string('truck_type');
			$table->string('dry_reefer');
			$table->string('insurance_number');
			$table->string('permit_type');
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
        Schema::dropIfExists('trucks');
    }
};
