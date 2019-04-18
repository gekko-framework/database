<?php
/*
 * (c) Leonardo Brugnara
 *
 * Full copyright and license information in LICENSE file.
 */

namespace Gekko\Database\Objects;

use \Gekko\Serialization\IJsonSerializable;

interface ITable extends IJsonSerializable
{
    /**
     * @return string Table name 
     */
    function name() : string;

    /**
     * @return IColumn Add a new column or retrieve an existent column
     */
    function column(string $name) : IColumn;

    /**
     * @return bool True if column with name $name exists within the table
     */
    function hasColumn(string $name) : bool;

    /**
     * @return bool True if table contains at least one column
     */
    function hasColumns() : bool;

    /**
     * @return bool True if current instance is equals to $table
     */
    function equals(ITable $table) : bool;
}
