<?php
/**
 * @author Nikolai Kordulla
 */
namespace Zawa\Getui\Protobuf\Type;
class PBBool extends PBInt
{
	var $wired_type = PBScalar::WIRED_VARINT;

	/**
	 * Parses the message for this type
	 *
	 * @param array
	 */
	public function ParseFromArray()
	{
		$this->value = $this->reader->next();
		$this->value = ($this->value != 0) ? 1 : 0;
	}

}
?>
