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
            $table->string('code');
            $table->string('sku');
            $table->string('sell_price');
            $table->string('unit');
            $table->string('tax');
            $table->string('summery');
            $table->string('description');
            $table->string('type');
            $table->string('billing');
            $table->string('resources');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(self::$tableName);
    }
}
