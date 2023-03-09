<?php namespace OpenMindedIT\Omitmanager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOpenmindeditOmitmanagerSubscriptionmanager4 extends Migration
{
    public function up()
    {
        Schema::table('openmindedit_omitmanager_subscriptionmanager', function($table)
        {
            $table->date('licence_end')->nullable();
            $table->date('vps_end')->nullable();
            $table->date('support_end')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('openmindedit_omitmanager_subscriptionmanager', function($table)
        {
            $table->dropColumn('licence_end');
            $table->dropColumn('vps_end');
            $table->dropColumn('support_end');
        });
    }
}
