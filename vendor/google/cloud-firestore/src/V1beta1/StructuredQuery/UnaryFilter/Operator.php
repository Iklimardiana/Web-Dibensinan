<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/query.proto

namespace Google\Cloud\Firestore\V1beta1\StructuredQuery\UnaryFilter;

use UnexpectedValueException;

/**
 * A unary operator.
 *
 * Protobuf type <code>google.firestore.v1beta1.StructuredQuery.UnaryFilter.Operator</code>
 */
class Operator
{
    /**
     * Unspecified. This value must not be used.
     *
     * Generated from protobuf enum <code>OPERATOR_UNSPECIFIED = 0;</code>
     */
    const OPERATOR_UNSPECIFIED = 0;
    /**
     * Test if a field is equal to NaN.
     *
     * Generated from protobuf enum <code>IS_NAN = 2;</code>
     */
    const IS_NAN = 2;
    /**
     * Test if an expression evaluates to Null.
     *
     * Generated from protobuf enum <code>IS_NULL = 3;</code>
     */
    const IS_NULL = 3;

    private static $valueToName = [
        self::OPERATOR_UNSPECIFIED => 'OPERATOR_UNSPECIFIED',
        self::IS_NAN => 'IS_NAN',
        self::IS_NULL => 'IS_NULL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Operator::class, \Google\Cloud\Firestore\V1beta1\StructuredQuery_UnaryFilter_Operator::class);
