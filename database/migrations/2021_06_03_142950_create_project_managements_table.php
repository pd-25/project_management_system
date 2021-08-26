<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_managements', function (Blueprint $table) {
            $table->id();
            $table->string('project_name', 200);
            $table->foreignId('project_type_id')->constrained('project_types');
            $table->text('image')->nullable();
            $table->longText('description')->nullable();
            $table->string('owner_name', 50)->nullable();
            $table->string('owner_phn', 15)->nullable();
            $table->string('owner_email', 20)->nullable();
            $table->date('actual_start_date')->nullable();
            $table->date('actual_end_date')->nullable();
            $table->date('expected_end_date')->nullable();
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
        Schema::dropIfExists('project_managements');
    }
}
