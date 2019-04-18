<?php
/*
 * (c) Leonardo Brugnara
 *
 * Full copyright and license information in LICENSE file.
 */

namespace Gekko\Database\Migrations;

use \Gekko\Database\Objects\ISchema;

interface ISchemaMigration
{
    /**
     * @return string SQL statement to add, alter or drop the schema
     */
    function migrate(?ISchema $target, ?ISchema $from = null) : string;
}
