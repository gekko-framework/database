<?php
/*
 * (c) Leonardo Brugnara
 *
 * Full copyright and license information in LICENSE file.
 */

namespace Gekko\Database\Objects;

use \Gekko\Serialization\IJsonSerializable;

interface IForeignKey extends IJsonSerializable
{
    function name() : string;

    function references(string $table, string ...$columns) : IForeignKey;

    public function equals(IForeignKey $foreignKey) : bool;
}