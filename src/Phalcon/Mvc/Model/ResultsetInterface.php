<?php
/**
 * Resultset Interface
 *
 * @author Andres Gutierrez <andres@phalconphp.com>
 * @author Eduar Carvajal <eduar@phalconphp.com>
 * @version 1.2.6
 * @package Phalcon
*/
namespace Phalcon\Mvc\Model;

/**
 * Phalcon\Mvc\Model\ResultsetInterface initializer
 *
 * @see https://github.com/phalcon/cphalcon/blob/1.2.6/ext/mvc/model/resultsetinterface.c
 */
interface ResultsetInterface
{
    /**
     * Returns the internal type of data retrieval that the resultset is using
     *
     * @return int
     */
    public function getType();

    /**
     * Get first row in the resultset
     *
     * @return \Phalcon\Mvc\ModelInterface
     */
    public function getFirst();

    /**
     * Get last row in the resultset
     *
     * @return \Phalcon\Mvc\ModelInterface
     */
    public function getLast();

    /**
     * Set if the resultset is fresh or an old one cached
     *
     * @param boolean $isFresh
     */
    public function setIsFresh($isFresh);

    /**
     * Tell if the resultset if fresh or an old one cached
     *
     * @return boolean
     */
    public function isFresh();

    /**
     * Returns the associated cache for the resultset
     *
     * @return \Phalcon\Cache\BackendInterface
     */
    public function getCache();

    /**
     * Returns a complete resultset as an array, if the resultset has a big number of rows
     * it could consume more memory than currently it does.
     *
     * @return array
     */
    public function toArray();
}
