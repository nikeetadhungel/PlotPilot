<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWellDepthsTable extends Migration
{
    public function up()
    {
        Schema::create('well_depths', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('locality'); // Locality of the well
            $table->decimal('depth', 8, 2); // Well depth in meters
            $table->decimal('water_level', 8, 2); // Water level in meters
            $table->string('well_type'); // Type of the well (e.g., bore well, dug well)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('well_depths'); // Rollback: Drops the table
    }
}
