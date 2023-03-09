<?php namespace OpenMindedIT\Omitmanager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOpenmindeditOmitmanagerSubscriptionmanager extends Migration
{
    public function up()
    {
        Schema::rename('openmindedit_omitmanager_', 'openmindedit_omitmanager_subscriptionmanager');
    }
    
    public function down()
    {
        Schema::rename('openmindedit_omitmanager_subscriptionmanager', 'openmindedit_omitmanager_');
    }
}
