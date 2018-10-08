<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Model\Titre;

class FillTitre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $titre = new Titre();
        $titre->name = 'Nouvel Inscrit';
        $titre->points_to_get = '5';
        $titre->save();

        $titre = new Titre();
        $titre->name = 'Novice';
        $titre->points_to_get = '10';
        $titre->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
