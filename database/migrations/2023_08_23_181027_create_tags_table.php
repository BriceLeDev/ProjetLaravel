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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('form_model_tags', function (Blueprint  $table){

            $table->foreignIdFor(\App\Models\FormModel::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\tags::class)->constrained()->cascadeOnDelete();
            $table->primary(['form_model_id','tags_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
