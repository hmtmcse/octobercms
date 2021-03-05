<?php namespace Hmtmcse\Ecommerce\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProductsTable extends Migration
{
    public static string $tableName = "hmtmcse_ecommerce_product";

    public function up()
    {
        Schema::create(self::$tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->decimal('sell_price')->nullable();
            $table->string('summery')->nullable();
            $table->string('description')->nullable();
            $table->string('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(self::$tableName);
    }
}
