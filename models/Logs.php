<?php namespace OpenMindedIT\Omitmanager\Models;

use Model;

/**
 * Model
 */
class Logs extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'renatio_formbuilder_form_logs';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
