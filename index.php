<?php
/**
 * Created by PhpStorm.
 * User: matias
 * Date: 13/4/18
 * Time: 11:52
 */
include 'ChallengeTwo.php';

$ct = new ChallengeTwo();

for ( $i = 1; $i <= 100; $i ++ ) {
	print $i.': '.$ct->calcMultiples( $i ) . '<br>';
}

