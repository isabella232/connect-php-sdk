<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * LoyaltyEventRedeemReward Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class LoyaltyEventRedeemReward implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'loyalty_program_id' => 'string',
        'reward_id' => 'string',
        'order_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'loyalty_program_id' => 'loyalty_program_id',
        'reward_id' => 'reward_id',
        'order_id' => 'order_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'loyalty_program_id' => 'setLoyaltyProgramId',
        'reward_id' => 'setRewardId',
        'order_id' => 'setOrderId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'loyalty_program_id' => 'getLoyaltyProgramId',
        'reward_id' => 'getRewardId',
        'order_id' => 'getOrderId'
    );
  
    /**
      * $loyalty_program_id The ID of the `loyalty program`.
      * @var string
      */
    protected $loyalty_program_id;
    /**
      * $reward_id The ID of the redeemed `loyalty reward`. This field is returned only if the event source is `LOYALTY_API`.
      * @var string
      */
    protected $reward_id;
    /**
      * $order_id The ID of the `order` that redeemed the reward. This field is returned only if the Orders API is used to process orders.
      * @var string
      */
    protected $order_id;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["loyalty_program_id"])) {
              $this->loyalty_program_id = $data["loyalty_program_id"];
            } else {
              $this->loyalty_program_id = null;
            }
            if (isset($data["reward_id"])) {
              $this->reward_id = $data["reward_id"];
            } else {
              $this->reward_id = null;
            }
            if (isset($data["order_id"])) {
              $this->order_id = $data["order_id"];
            } else {
              $this->order_id = null;
            }
        }
    }
    /**
     * Gets loyalty_program_id
     * @return string
     */
    public function getLoyaltyProgramId()
    {
        return $this->loyalty_program_id;
    }
  
    /**
     * Sets loyalty_program_id
     * @param string $loyalty_program_id The ID of the `loyalty program`.
     * @return $this
     */
    public function setLoyaltyProgramId($loyalty_program_id)
    {
        $this->loyalty_program_id = $loyalty_program_id;
        return $this;
    }
    /**
     * Gets reward_id
     * @return string
     */
    public function getRewardId()
    {
        return $this->reward_id;
    }
  
    /**
     * Sets reward_id
     * @param string $reward_id The ID of the redeemed `loyalty reward`. This field is returned only if the event source is `LOYALTY_API`.
     * @return $this
     */
    public function setRewardId($reward_id)
    {
        $this->reward_id = $reward_id;
        return $this;
    }
    /**
     * Gets order_id
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }
  
    /**
     * Sets order_id
     * @param string $order_id The ID of the `order` that redeemed the reward. This field is returned only if the Orders API is used to process orders.
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
