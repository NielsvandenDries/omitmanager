<?php namespace OpenMindedIT\Omitmanager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOpenmindeditOmitmanagerFormlogs extends Migration
{
    public function up()
    {
        Schema::create('openmindedit_omitmanager_formlogs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('openmindedit_omitmanager_formlogs');
    }
}
