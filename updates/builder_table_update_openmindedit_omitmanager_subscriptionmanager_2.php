<?php namespace OpenMindedIT\Omitmanager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOpenmindeditOmitmanagerSubscriptionmanager2 extends Migration
{
    public function up()
    {
        Schema::table('openmindedit_omitmanager_subscriptionmanager', function($table)
        {
            $table->string('vps');
            $table->string('licence');
            $table->string('support');
        });
    }
    
    public function down()
    {
        Schema::table('openmindedit_omitmanager_subscriptionmanager', function($table)
        {
            $table->dropColumn('vps');
            $table->dropColumn('licence');
            $table->dropColumn('support');
        });
    }
}
