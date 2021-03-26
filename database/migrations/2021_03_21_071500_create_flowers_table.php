<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flowers1', function (Blueprint $table) {
            $table->id();
                        $table->string('nume');
                        $table->string('marime');
                        //culoarea nu este obligatorie
                        $table->string('culoare')->nullable();
                        $table->integer('pret');
            $table->timestamps();
        });
        DB::unprepared("CREATE PROCEDURE InsertFlowers(IN var_nume varchar(255), IN var_marime varchar(255), IN var_culoare varchar(255), IN var_pret int)
                        BEGIN
                        INSERT INTO flowers1(nume,marime,culoare,pret) VALUES(var_nume,var_marime,var_culoare,var_pret);
                        END;");
        DB::unprepared('CREATE PROCEDURE GetFlowers() 
                        BEGIN 
                        SELECT * FROM flowers1; 
                        END');
        DB::unprepared('CREATE PROCEDURE GetFlower(IN var_nume varchar(255)) 
                        BEGIN 
                        SELECT * FROM flowers1 WHERE nume=var_nume; 
                        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flowers1');
          DB::unprepared('DROP PROCEDURE IF EXISTS GetFlowers');
          DB::unprepared('DROP PROCEDURE IF EXISTS GetFlower');
          DB::unprepared('DROP PROCEDURE IF EXISTS InsertFlowers');
    }
}
