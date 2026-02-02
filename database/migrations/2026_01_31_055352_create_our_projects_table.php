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
        Schema::create('our_projects', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('our_service_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->text('demo_link')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_published')->default(0);
            $table->text('meta_title')->nullable();
            $table->text('meta_tags')->nullable();
            $table->text('meta_description')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->json('json_data')->nullable();
            $table->timestamps();
            $table->foreign('our_service_id')->references('id')->on('our_services')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_projects');
    }
};
