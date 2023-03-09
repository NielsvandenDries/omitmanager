<?php namespace OpenMindedIT\Omitmanager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOpenmindeditOmitmanagerSubscriptionmanager3 extends Migration
{
    public function up()
    {
        Schema::table('openmindedit_omitmanager_subscriptionmanager', function($table)
        {
            $table->string('domein')->nullable();
            $table->string('server')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('openmindedit_omitmanager_subscriptionmanager', function($table)
        {
            $table->dropColumn('domein');
            $table->dropColumn('server');
        });
    }
}
