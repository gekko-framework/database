<?php
/*
 * (c) Leonardo Brugnara
 *
 * Full copyright and license information in LICENSE file.
 */

namespace Gekko\Database\Migrations;

use \Gekko\Database\Objects\ISchema;

interface IMigration
{
    /**
     * Migrate database to the target schema. If $from is provided,
     * the migration will proceed from that previous version
     */
    function migrate(?ISchema $target, ?ISchema $from = null) : void;

    /**
     * Upgrade database to an specific version
     */
    function upgradeTo(int $version) : void;

    /**
     * Downgrade database to an specific version
     */
    function downgradeTo(int $version) : void;

    /**
     * Reset the database by downgrading all the versionts
     * until reach the initial state
     *
     */
    function reset() : void;

    /**
     * Load a specific schema version
     */
    function loadSchema(int $version) : ?ISchema;

    /**
     * Get the last available version
     */
    function getLastVersion() : int;
}
