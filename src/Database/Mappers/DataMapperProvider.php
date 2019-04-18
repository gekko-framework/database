<?php
/*
 * (c) Leonardo Brugnara
 *
 * Full copyright and license information in LICENSE file.
 */

namespace Gekko\Database\Mappers;

use Gekko\Database\IConnection;

class DataMapperProvider
{
    /**
     * Already instantiated data mappers
     * 
     * @var \Gekko\Database\Mappers\IDataMapper[]
     */
    private static $mappers = [];

    /**
     * Database connection
     *
     * @var \Gekko\Database\IConnection
     */
    private $connection;


    public function __construct(IConnection $connection)
    {
        $this->connection = $connection;
    }


    public function resolve(string $model) : IDataMapper
    {
        if (isset(self::$mappers[$model]))
            return self::$mappers[$model];

        $ref = (new \ReflectionClass($model));
        
        $mapperClass =  $ref->getNamespaceName() . "\\DataMappers\\"  . $ref->getShortName() . "DataMapper";

        return self::$mappers[$model] = new $mapperClass($this->connection);
    }
}
