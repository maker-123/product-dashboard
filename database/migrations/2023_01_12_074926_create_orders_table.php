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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('branch_id')->unsigned();
            $table->integer('schedules_id')->unsigned();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('contact_no');
            $table->string('contact_type')->nullable();
            $table->string('username')->nullable();
            $table->integer('status');
            $table->string('order_type');
            $table->datetime('date');
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->string('city');
            $table->string('province');
            $table->string('landmark')->nullable();
            $table->string('rep_fname');
            $table->string('rep_lname');
            $table->string('rep_contact_no');
            $table->string('admin_notes')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
