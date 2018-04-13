<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 13/4/18
 * Time: 18:55
 */

include 'ChallengeTwo.php';

final class ChallengeTwoTest extends \PHPUnit\Framework\TestCase {

	protected $ct;

	public function setUp() {
		$this->ct = new ChallengeTwo();
	}

	public function testMultiple3() {
		$this->assertEquals( 'Linio', $this->ct->calcMultiples( 3 ) );
	}

	public function testMultiple5() {
		$this->assertEquals( 'IT', $this->ct->calcMultiples( 5 ) );
	}

	public function testMultiple3and5() {
		$this->assertEquals( 'Linianos', $this->ct->calcMultiples( 15 ) );
	}

}