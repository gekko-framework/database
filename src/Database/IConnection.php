<?php
/*
 * (c) Leonardo Brugnara
 *
 * Full copyright and license information in LICENSE file.
 */

namespace Gekko\Database;

interface IConnection
{
    function exec(string $statement) : int;
    function query(string $query) : \PDOStatement;
    function prepare(string $query) : \PDOStatement;
    function lastInsertId() : int;
    /*;
    function beginTransaction();
    function commit();
    function rollBack();
    function errorCode();
    function errorInfo();*/
}
