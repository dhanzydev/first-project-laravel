<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
                ->constrained()
                ->restrictOnUpdate()
                ->cascadeOnDelete();
            $table->string('title');
            $table->string('author');
            $table->integer('year');
            $table->enum('condition', ['Bagus', 'Rusak']);
            $table->enum('status', ['Tersedia', 'Tidak tersedia']);
            $table->integer('quantity');
            $table->string('photo');
            $table->longText('description');
            $table->string('slug');
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
        Schema::dropIfExists('books');
    }
}
