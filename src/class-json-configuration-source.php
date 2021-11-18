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

use JsonException;
use RuntimeException;

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
	 * @throws \RuntimeException If unable to produce the content.
	 */
	public function fetch(): array {
		try {
			return (array) json_decode( $this->fetch_content(), true, 512, JSON_THROW_ON_ERROR );
		} catch ( JsonException $_ ) {
			throw new RuntimeException( 'Malformed JSON configuration' );
		}
	}
}
