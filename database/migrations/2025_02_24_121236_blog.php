<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create("posts", function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug");
            $table->longText("body");
            // TODO: use $table->timestamps(); instead of making timestamps by yourself
            $table->timestamp("created_at");
            $table->timestamp("updated_at")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists("posts");
        schema::dropIfExists("blogs");
    }
};
