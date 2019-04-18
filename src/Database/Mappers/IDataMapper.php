<?php
/*
 * (c) Leonardo Brugnara
 *
 * Full copyright and license information in LICENSE file.
 */

namespace Gekko\Database\Mappers;

interface IDataMapper
{
    /**
     * Find and return object by id
     *
     * @param mixed ...$id object's id
     * @return object Object identified by $id
     */
    function get(...$id) : ?object;

    /**
     * Find and return object by id
     *
     * @param mixed ...$id object's id
     * @return object Object identified by $id
     */
    function getAll() : array;

    /**
     * Create and save a new object
     *
     * @param object $object Object to create
     * @return bool Return true if object creation is successful. Otherwise return false
     */
    function add(object $object) : bool;

    /**
     * Update object
     *
     * @param object $object Object to update
     * @return boolean Return true if object update is successful. Otherwise return false
     */
    function save(object $object) : bool;

    /**
     * Delete object
     *
     * @param object $object Object to delete
     * @return boolean Return true if object deletion is successful. Otherwise return false
     */
    function delete(object $object) : bool;
}
