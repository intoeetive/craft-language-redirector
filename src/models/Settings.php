<?php
/**
 * Language Redirector plugin for Craft CMS 3.x.
 *
 * Automatically redirect visitors to their preferred language
 *
 * @see      https://pierrestoffe.be
 *
 * @copyright Copyright (c) 2018 Pierre Stoffe
 */

namespace pierrestoffe\languageredirector\models;

use craft\base\Model;

/**
 * @author    Pierre Stoffe
 *
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * A list of all languages and their matching site.
     *
     * @var array
     */
    public $languages = [];

    /**
     * The name of the URL query parameter.
     *
     * @var string
     */
    public $queryParameterName = 'lang';

    /**
     * The name of the HTTP session key.
     *
     * @var string
     */
    public $sessionKeyName = 'lang';

    /**
     * Should users with access to the Control Panel be redirected.
     *
     * @var bool
     */
    public $redirectUsersWithCpAccess = 'lang';

    // Public Methods
    // =========================================================================

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['languages', 'default', 'value' => []],
            ['languages', 'required'],

            ['queryParameterName', 'string'],
            ['queryParameterName', 'default', 'value' => 'lang'],

            ['sessionKeyName', 'string'],
            ['sessionKeyName', 'default', 'value' => 'lang'],
            
            ['redirectUsersWithCpAccess', 'bool'],
            ['redirectUsersWithCpAccess', 'default', 'value' => true],
        ];
    }
}
