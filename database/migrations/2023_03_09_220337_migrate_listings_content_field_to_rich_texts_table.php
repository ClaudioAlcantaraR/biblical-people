<?php

use App\Models\Listing;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach (DB::table('listings')->oldest('id')->cursor() as $listing) {
            DB::table('rich_texts')->insert([
                'field' => 'content',
                'body' => '<div>' . $listing->content . '</div>',
                'record_type' => (new Listing())->getMorphClass(),
                'record_id' => $listing->id,
                'created_at' => $listing->created_at,
                'updated_at' => $listing->updated_at,
            ]);
        }
        Schema::table('listings', function (Blueprint $table) {
            $table->dropColumn('content');
        });
    }
    
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rich_texts', function (Blueprint $table) {
            //
        });
    }
};
