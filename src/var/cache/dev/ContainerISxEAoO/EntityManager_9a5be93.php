<?php

namespace ContainerISxEAoO;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere0e79 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2fa15 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties720d8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'getConnection', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'getMetadataFactory', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'getExpressionBuilder', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'beginTransaction', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'getCache', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'transactional', array('func' => $func), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->transactional($func);
    }

    public function commit()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'commit', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->commit();
    }

    public function rollback()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'rollback', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'getClassMetadata', array('className' => $className), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'createQuery', array('dql' => $dql), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'createNamedQuery', array('name' => $name), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'createQueryBuilder', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'flush', array('entity' => $entity), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'clear', array('entityName' => $entityName), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->clear($entityName);
    }

    public function close()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'close', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->close();
    }

    public function persist($entity)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'persist', array('entity' => $entity), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'remove', array('entity' => $entity), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'refresh', array('entity' => $entity), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'detach', array('entity' => $entity), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'merge', array('entity' => $entity), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'contains', array('entity' => $entity), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'getEventManager', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'getConfiguration', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'isOpen', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'getUnitOfWork', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'getProxyFactory', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'initializeObject', array('obj' => $obj), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'getFilters', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'isFiltersStateClean', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'hasFilters', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return $this->valueHoldere0e79->hasFilters();
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

        $instance->initializer2fa15 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere0e79) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere0e79 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere0e79->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, '__get', ['name' => $name], $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        if (isset(self::$publicProperties720d8[$name])) {
            return $this->valueHoldere0e79->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0e79;

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

        $targetObject = $this->valueHoldere0e79;
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
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0e79;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere0e79;
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
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, '__isset', array('name' => $name), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0e79;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere0e79;
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
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, '__unset', array('name' => $name), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0e79;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere0e79;
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
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, '__clone', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        $this->valueHoldere0e79 = clone $this->valueHoldere0e79;
    }

    public function __sleep()
    {
        $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, '__sleep', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;

        return array('valueHoldere0e79');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2fa15 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2fa15;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2fa15 && ($this->initializer2fa15->__invoke($valueHoldere0e79, $this, 'initializeProxy', array(), $this->initializer2fa15) || 1) && $this->valueHoldere0e79 = $valueHoldere0e79;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere0e79;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere0e79;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
