<?php
namespace PHPConfig;

/**
 * Allow to set php.ini values on the fly.
 */
class Module
{
    const CONFIG_KEY = 'PHPConfig';

    /**
     * @param \Zend\Mvc\MvcEvent $mvcEvent
     */
    public function onBootstrap($mvcEvent)
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
