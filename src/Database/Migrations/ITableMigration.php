<?php
/*
 * (c) Leonardo Brugnara
 *
 * Full copyright and license information in LICENSE file.
 */

namespace Gekko\Database\Migrations;

use \Gekko\Database\Objects\ITable;

interface ITableMigration
{
    /**
     * @return string SQL statement to add, alter or drop the table
     */
    function migrate(?ITable $target, ?ITable $from = null) : string;
}
