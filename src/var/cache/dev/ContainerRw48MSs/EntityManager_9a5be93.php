<?php

namespace ContainerRw48MSs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder89dec = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer77242 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties634f7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'getConnection', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'getMetadataFactory', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'getExpressionBuilder', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'beginTransaction', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'getCache', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->getCache();
    }

    public function transactional($func)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'transactional', array('func' => $func), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->transactional($func);
    }

    public function commit()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'commit', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->commit();
    }

    public function rollback()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'rollback', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'getClassMetadata', array('className' => $className), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'createQuery', array('dql' => $dql), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'createNamedQuery', array('name' => $name), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'createQueryBuilder', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'flush', array('entity' => $entity), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'clear', array('entityName' => $entityName), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->clear($entityName);
    }

    public function close()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'close', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->close();
    }

    public function persist($entity)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'persist', array('entity' => $entity), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'remove', array('entity' => $entity), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'refresh', array('entity' => $entity), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'detach', array('entity' => $entity), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'merge', array('entity' => $entity), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'getRepository', array('entityName' => $entityName), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'contains', array('entity' => $entity), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'getEventManager', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'getConfiguration', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'isOpen', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'getUnitOfWork', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'getProxyFactory', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'initializeObject', array('obj' => $obj), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'getFilters', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'isFiltersStateClean', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'hasFilters', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return $this->valueHolder89dec->hasFilters();
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

        $instance->initializer77242 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder89dec) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder89dec = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder89dec->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, '__get', ['name' => $name], $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        if (isset(self::$publicProperties634f7[$name])) {
            return $this->valueHolder89dec->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89dec;

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

        $targetObject = $this->valueHolder89dec;
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
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89dec;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder89dec;
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
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, '__isset', array('name' => $name), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89dec;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder89dec;
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
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, '__unset', array('name' => $name), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89dec;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder89dec;
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
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, '__clone', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        $this->valueHolder89dec = clone $this->valueHolder89dec;
    }

    public function __sleep()
    {
        $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, '__sleep', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;

        return array('valueHolder89dec');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer77242 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer77242;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer77242 && ($this->initializer77242->__invoke($valueHolder89dec, $this, 'initializeProxy', array(), $this->initializer77242) || 1) && $this->valueHolder89dec = $valueHolder89dec;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder89dec;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder89dec;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
