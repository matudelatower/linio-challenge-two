<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 13/4/18
 * Time: 18:52
 */

final class ChallengeTwo {

	public function calcMultiples( $number ) {

		$print = $number;

		$mult3 = $number % 3;
		$mult5 = $number % 5;

		while ( ! $mult3 ) {
			$print = 'Linio';
			break;
		}

		while ( ! $mult5 ) {
			$print = 'IT';
			break;
		}

		if ( $mult3 == 0 && $mult5 == 0 ) {
			$print = 'Linianos';
		}

		return $print ;

	}

}