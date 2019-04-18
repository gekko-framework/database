<?php
/*
 * (c) Leonardo Brugnara
 *
 * Full copyright and license information in LICENSE file.
 */

namespace Gekko\Database\Objects;

use \Gekko\Serialization\IJsonSerializable;

interface ISchema extends IJsonSerializable
{
    /**
     * @return string Schema name 
     */
    function name() : string;

    /**
     * @return ITable Add a new table or retrieve an existent table
     */
    function table(string $name) : ITable;

    /**
     * @return bool True if table with name $name exists
     */
    function hasTable(string $name) : bool;

    /**
     * @return bool True if schema contains at least one table
     */
    function hasTables() : bool;

    /**
     * @return bool True if current instance is equals to $schema
     */
    function equals(ISchema $schema) : bool;
}
