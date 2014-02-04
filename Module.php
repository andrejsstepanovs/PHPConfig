<?php
namespace PHPConfig;

use \Zend\EventManager\EventInterface;

/**
 * Class Module
 *
 * Allow to set php.ini values on the fly.
 *
 * @package PHPConfig
 */
class Module
{
    /** configuration key */
    const CONFIG_KEY = 'PHPConfig';

    /**
     * @param \Zend\Mvc\MvcEvent|EventInterface $mvcEvent
     */
    public function onBootstrap(EventInterface $mvcEvent)
    {
        /** @var $application \Zend\Mvc\Application */
        $application = $mvcEvent->getApplication();

        /** @var $config array */
        $config = $application->getConfig();

        if (!empty($config[self::CONFIG_KEY])) {
            foreach ($config[self::CONFIG_KEY] as $key => $value) {
                ini_set($key, $value);
            }
        }
    }
}
