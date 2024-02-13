<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getConnection', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getMetadataFactory', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getExpressionBuilder', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'beginTransaction', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getCache', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'transactional', array('func' => $func), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'commit', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->commit();
    }

    public function rollback()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'rollback', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getClassMetadata', array('className' => $className), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'createQuery', array('dql' => $dql), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'createNamedQuery', array('name' => $name), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'createQueryBuilder', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'flush', array('entity' => $entity), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'clear', array('entityName' => $entityName), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->clear($entityName);
    }

    public function close()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'close', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->close();
    }

    public function persist($entity)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'persist', array('entity' => $entity), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'remove', array('entity' => $entity), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'refresh', array('entity' => $entity), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'detach', array('entity' => $entity), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'merge', array('entity' => $entity), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'contains', array('entity' => $entity), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getEventManager', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getConfiguration', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'isOpen', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getUnitOfWork', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getProxyFactory', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'initializeObject', array('obj' => $obj), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'getFilters', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'isFiltersStateClean', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, 'hasFilters', array(), $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        return $this->valueHolder9872e->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer00242 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9872e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9872e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9872e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer00242 && ($this->initializer00242->__invoke($valueHolder9872e, $this, '__get', ['name' => $name], $this->initializer00242) || 1) && $this->valueHolder9872e = $valueHolder9872e;

        if (isset(self::$publicProperties109ce[$name])) {
            return $this->valueHolder9872e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
