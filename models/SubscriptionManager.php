<?php namespace OpenMindedIT\Omitmanager\Models;

use Model;

/**
 * Model
 */
class SubscriptionManager extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'openmindedit_omitmanager_subscriptionmanager';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
