<?php

namespace Moonwalking_Bits\Configuration\Configuration_Source;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Moonwalking_Bits\Configuration\JSON_Configuration_Source
 */
class JSON_Configuration_Source_Test extends TestCase {

	/**
	 * @test
	 */
	public function should_return_values(): void {
		$configuration_source = new JSON_Configuration_Source( __DIR__ . '/fixtures/content.json' );

		$this->assertEquals( array( 'key' => 'value' ), $configuration_source->fetch() );
	}
}
