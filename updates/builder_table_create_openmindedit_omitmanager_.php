<?php namespace OpenMindedIT\Omitmanager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOpenmindeditOmitmanager extends Migration
{
    public function up()
    {
        Schema::create('openmindedit_omitmanager_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('company')->nullable();
            $table->string('firstname');
            $table->string('surname');
            $table->string('iban');
            $table->string('autocollect');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->string('product');
            $table->date('subscription_start')->nullable();
            $table->date('subscription_end')->nullable();
            $table->string('subscription_paid');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('openmindedit_omitmanager_');
    }
}
