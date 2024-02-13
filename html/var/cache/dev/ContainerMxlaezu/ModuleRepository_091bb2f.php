<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9872e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer00242 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties109ce = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getList', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getInstalledModules', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getMustBeConfiguredModules', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getUpgradableModules', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'setActionUrls', array('collection' => $collection), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->clearCache($moduleName, $allShops);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializer00242 = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder9872e) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder9872e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder9872e->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, '__get', ['name' => $name], $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        if (isset(self::$publicProperties109ce[$name])) {
            return $this->valueHolder9872e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9872e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9872e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9872e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9872e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, '__isset', array('name' => $name), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9872e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9872e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, '__unset', array('name' => $name), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9872e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9872e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, '__clone', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        $this->valueHolder9872e = clone $this->valueHolder9872e;
    }

    public function __sleep()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, '__sleep', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return array('valueHolder9872e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer00242 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer00242;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'initializeProxy', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9872e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9872e;
    }
}
