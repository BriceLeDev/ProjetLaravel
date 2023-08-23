<?php

use App\Models\ProfileMdel;
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
        Schema::create('profile_mdels', function (Blueprint $table) {
            $table->id();
            $table -> string('profile');
            $table->timestamps();
        });
      Schema::table('form_models', function(Blueprint $table){
        $table->foreignIdFor(ProfileMdel::class)->nullable()->constrained()->cascadeOnDelete();
         // $table->foreignId('profil_mdel_id')->constrained();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_mdels');

        Schema::table('form_models', function(Blueprint $table){
            $table->dropForeignIdFor(ProfileMdel::class);
        });
    }
};
