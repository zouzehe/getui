<?php
/**
 * @author Nikolai Kordulla
 */
namespace Zawa\Getui\Protobuf\Type;
use Zawa\Getui\Protobuf\PBMessage;

class PBScalar extends PBMessage
{
	/**
	 * Set scalar value
	 */
	public function set_value($value)
	{	
		$this->value = $value;	
	}

	/**
	 * Get the scalar value
	 */
	public function get_value()
	{
		return $this->value;
	}
}
?>
