<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/common/user_lists.proto

namespace Google\Ads\GoogleAds\V8\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rule item composed of a string operation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.common.UserListStringRuleItemInfo</code>
 */
class UserListStringRuleItemInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * String comparison operator.
     * This field is required and must be populated when creating a new string
     * rule item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.UserListStringRuleItemOperatorEnum.UserListStringRuleItemOperator operator = 1;</code>
     */
    protected $operator = 0;
    /**
     * The right hand side of the string rule item. For URLs or referrer URLs,
     * the value can not contain illegal URL chars such as newlines, quotes,
     * tabs, or parentheses. This field is required and must be populated when
     * creating a new string rule item.
     *
     * Generated from protobuf field <code>string value = 3;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operator
     *           String comparison operator.
     *           This field is required and must be populated when creating a new string
     *           rule item.
     *     @type string $value
     *           The right hand side of the string rule item. For URLs or referrer URLs,
     *           the value can not contain illegal URL chars such as newlines, quotes,
     *           tabs, or parentheses. This field is required and must be populated when
     *           creating a new string rule item.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * String comparison operator.
     * This field is required and must be populated when creating a new string
     * rule item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.UserListStringRuleItemOperatorEnum.UserListStringRuleItemOperator operator = 1;</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * String comparison operator.
     * This field is required and must be populated when creating a new string
     * rule item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.UserListStringRuleItemOperatorEnum.UserListStringRuleItemOperator operator = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V8\Enums\UserListStringRuleItemOperatorEnum\UserListStringRuleItemOperator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * The right hand side of the string rule item. For URLs or referrer URLs,
     * the value can not contain illegal URL chars such as newlines, quotes,
     * tabs, or parentheses. This field is required and must be populated when
     * creating a new string rule item.
     *
     * Generated from protobuf field <code>string value = 3;</code>
     * @return string
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : '';
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * The right hand side of the string rule item. For URLs or referrer URLs,
     * the value can not contain illegal URL chars such as newlines, quotes,
     * tabs, or parentheses. This field is required and must be populated when
     * creating a new string rule item.
     *
     * Generated from protobuf field <code>string value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}

