<?php namespace OpenMindedIT\Omitmanager\Components;

use Cms\Classes\ComponentBase;
use OpenMindedIT\Omitmanager\Models\SubscriptionManager;

class Subscription extends ComponentBase
{
    public $item;

    public function componentDetails()
    {
        return [
            'name' => 'Subscriptions',
            'description' => 'Show Customer Subscription details'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'company' => [
                'title'             => 'Company',
                'description'       => 'Watch the Simpson',
                'type'              => 'dropdown',
            ]
        ];
    }

    public function getCompanyOptions()
    {
        return SubscriptionManager::get()->lists('company', 'company');
    }

    public function onRun()
    {
        // filter voor gearchiveerde item keuze uit 0 en 1
        // $this->item = SubscriptionManager::get()->toArray();
        $this->item = SubscriptionManager::where('company', $this->property('company'))->get()->toArray();
    }
}
