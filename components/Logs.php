<?php namespace OpenMindedIT\Omitmanager\Components;

use Cms\Classes\ComponentBase;

/**
 * Logs Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Logs extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'logs Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}
