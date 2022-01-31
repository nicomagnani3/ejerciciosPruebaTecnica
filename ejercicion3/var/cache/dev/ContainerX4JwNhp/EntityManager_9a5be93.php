<?php

namespace ContainerX4JwNhp;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8183c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf611d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0673c = [
        
    ];

    public function getConnection()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'getConnection', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'getMetadataFactory', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'getExpressionBuilder', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'beginTransaction', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'getCache', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'transactional', array('func' => $func), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'commit', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->commit();
    }

    public function rollback()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'rollback', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'getClassMetadata', array('className' => $className), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'createQuery', array('dql' => $dql), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'createNamedQuery', array('name' => $name), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'createQueryBuilder', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'flush', array('entity' => $entity), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'clear', array('entityName' => $entityName), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->clear($entityName);
    }

    public function close()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'close', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->close();
    }

    public function persist($entity)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'persist', array('entity' => $entity), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'remove', array('entity' => $entity), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'refresh', array('entity' => $entity), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'detach', array('entity' => $entity), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'merge', array('entity' => $entity), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'contains', array('entity' => $entity), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'getEventManager', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'getConfiguration', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'isOpen', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'getUnitOfWork', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'getProxyFactory', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'initializeObject', array('obj' => $obj), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'getFilters', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'isFiltersStateClean', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'hasFilters', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return $this->valueHolder8183c->hasFilters();
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

        $instance->initializerf611d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8183c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8183c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8183c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, '__get', ['name' => $name], $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        if (isset(self::$publicProperties0673c[$name])) {
            return $this->valueHolder8183c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8183c;

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

        $targetObject = $this->valueHolder8183c;
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
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8183c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8183c;
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
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, '__isset', array('name' => $name), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8183c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8183c;
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
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, '__unset', array('name' => $name), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8183c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8183c;
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
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, '__clone', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        $this->valueHolder8183c = clone $this->valueHolder8183c;
    }

    public function __sleep()
    {
        $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, '__sleep', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;

        return array('valueHolder8183c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf611d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf611d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf611d && ($this->initializerf611d->__invoke($valueHolder8183c, $this, 'initializeProxy', array(), $this->initializerf611d) || 1) && $this->valueHolder8183c = $valueHolder8183c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8183c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8183c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
