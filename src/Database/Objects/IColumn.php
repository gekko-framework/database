<?php
/*
 * (c) Leonardo Brugnara
 *
 * Full copyright and license information in LICENSE file.
 */

namespace Gekko\Database\Objects;

use \Gekko\Serialization\IJsonSerializable;

interface IColumn extends IJsonSerializable
{
    /**
     * @return string Column name
     */
    function name() : string;

    /**
     * Set column's size/length/width
     */
    function length(int $length) : self;

    /**
     * Set column's precision/scale 
     */
    function precision(int $precision) : self;

    /**
     * Mark column as primary key
     */
    function key() : self;

    /**
     * Mark column as unique key
     */
    function unique() : self;

    /**
     * Set column as autoincrement
     */
    function autoincrement() : self;

    /**
     * Set column as nullable
     */
    function nullable() : self;

    /**
     * Set column type as provided type
     */
    function type(string $type) : self;

    /**
     * Set column type byte
     */
    function byte() : self;
    
    /**
     * Set column type int16
     */
    function int16() : self;
    
    /**
     * Set column type int32
     */
    function int32() : self;
    
    /**
     * Set column type int64
     */
    function int64() : self;
    
    /**
     * Set column type float
     */
    function float() : self;
    
    /**
     * Set column type double
     */
    function double() : self;
    
    /**
     * Set column type decimal
     */
    function decimal() : self;
    
    /**
     * Set column type boolean
     */
    function boolean() : self;
    
    /**
     * Set column type string
     */
    function string() : self;
    
    /**
     * Set column type text
     */
    function text() : self;
    
    /**
     * Set column type char
     */
    function char() : self;
    
    /**
     * Set column type varchar
     */
    function varchar() : self;
    
    /**
     * Set column type binary
     */
    function binary() : self;
    
    /**
     * Set column type blob
     */
    function blob() : self;
    
    /**
     * Set column type dateTime
     */
    function dateTime() : self;
    
    /**
     * Set column type time
     */
    function time() : self;
    
    /**
     * Set column type timestamp
     */
    function timestamp() : self;

    /**
     * @return bool true if $column is equals to the current instance
     */
    function equals(IColumn $column) : bool;
}
