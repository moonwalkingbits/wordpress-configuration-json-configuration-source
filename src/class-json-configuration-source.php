<?php
/**
 * Configuration: JSON file configuration source
 *
 * @package Moonwalking_Bits\Configuration\Configuration_Source
 * @author Martin Pettersson
 * @license GPL-2.0
 * @since 0.1.0
 */

namespace Moonwalking_Bits\Configuration\Configuration_Source;

/**
 * JSON file configuration source implementation.
 *
 * @since 0.1.0
 */
class JSON_Configuration_Source extends Abstract_File_Configuration_Source {

	/**
	 * Fetches the configuration source content.
	 *
	 * @since 0.1.0
	 * @return array The configuration source content.
	 */
	public function fetch(): array {
		return (array) json_decode( $this->fetch_content(), true );
	}
}
