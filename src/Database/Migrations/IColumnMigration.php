<?php
/*
 * (c) Leonardo Brugnara
 *
 * Full copyright and license information in LICENSE file.
 */

namespace Gekko\Database\Migrations;

use \Gekko\Database\Objects\IColumn;

interface IColumnMigration
{
    /**
     * @return string SQL statement to add, alter or drop the column
     */
    function migrate(?IColumn $target, ?IColumn $from = null) : string;
}
