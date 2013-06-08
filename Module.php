<?php
namespace PHPConfig;


/**
 * Allow to set php.ini values on the fly.
 */
class Module
{
    /**
     * @param Zend\Mvc\MvcEvent $mvcEvent
     */
    public function onBootstrap($mvcEvent)
    {
        /** @var $application \Zend\Mvc\Application */
        $application = $mvcEvent->getApplication();

        /** @var $config array */
        $config = $application->getConfig();

        if (array_key_exists('PHPConfig', $config)
            && is_array($config['PHPConfig'])
        ) {
            foreach ($config['PHPConfig'] as $key => $value) {
                ini_set($key, $value);
            }
        }
    }
}
