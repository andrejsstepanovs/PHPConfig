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

        if (array_key_exists('PhpConfig', $config)
            && is_array($config['PhpConfig'])
        ) {
            foreach ($config['PhpConfig'] as $key => $value) {
                ini_set($key, $value);
            }
        }
    }
}
