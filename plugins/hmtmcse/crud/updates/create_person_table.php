<?php namespace Hmtmcse\Crud\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePersonTable extends Migration
{
    public function up()
    {
        Schema::create('hmtmcse_crud_person', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string("name");
            $table->string('email');
            $table->string("password");
            $table->integer("age");
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hmtmcse_crud_people');
    }
}
