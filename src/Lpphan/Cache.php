<?php

namespace Lpphan;

use Memcached;

/**
 * Description of Cache
 *
 * @author lamphuong
 */
class Cache implements CacheInterface {

    protected $memCache;

    public function __construct() {
        $this->memCache = new Memcached;
        $this->memCache->addserver('127.0.0.1', 11211, 100);
    }

    /**
     * Get the contents that are stored with the given key
     * 
     * @param string $key
     * @return mixed
     */
    public function get($key) {
        return $this->memCache->get($key);
    }

    /**
     * Determines if the cache has the given key.
     * 
     * @param string $key
     * @return boolean
     */
    public function has($key) {
        return $this->memCache->get($key);
    }

    /**
     * Delete the contents that are stored with the given key
     * 
     * @param string $key
     */
    public function remove($key) {
        $this->memCache->delete($key);
    }

    /**
     * Adds the value into the cache under the given key.
     * 
     * @param string $key
     * @param string $value
     * @param int $seconds
     * @return boolean
     */
    public function set($key, $value, $seconds) {
        return $this->memCache->set($key, $value, $seconds);
    }

//    /**
//     * If the cache has the key given return it, else add the value return in callable in to the cache under the given key
//     * 
//     * @param string $key
//     * @param int $seconds
//     * @param \LolApi\callable $callback
//     * @return mixed
//     * @throws \InvalidArgumentException
//     */
//    public function remember($key, $seconds, callable $callback) {
//        if ($this->has($key)) {
//            return $this->memCache->get($key);
//        }
//        
//        if (!is_callable($callback)){
//            throw new \InvalidArgumentException('Function not callable');
//        }
//        
//        $value = call_user_func($callback);
//        return $this->set($key, $value, $seconds);
//    }

}
