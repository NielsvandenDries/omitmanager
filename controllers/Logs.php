<?php namespace OpenMindedIT\Omitmanager\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Logs extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'OmitManager' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('OpenMindedIT.Omitmanager', 'main-menu-item', 'side-menu-item2');
    }
}
