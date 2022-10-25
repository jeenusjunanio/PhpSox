<?php
/**
 * SoundExchangePhp demo
 */
$basedir = dirname(__DIR__);
require_once $basedir.'/SoundExchangePhp/SoundExchange.php';


$file1 = $basedir."/audio/breaks.mp3";
$file2 = $basedir."/audio/alien_birds.mp3";
$outputBase = $basedir."/audio/tests/output";
$outputFile = $basedir."/audio/tests/output.mp3";

$response = SoundExchange::concatenate( array($file1, $file2), $outputBase."_concat.mp3" );
echo $response;

$response = SoundExchange::mix( array($file1, $file2), $outputBase."_mix.mp3" );
echo $response;

$response = SoundExchange::trim( $file2, $outputBase."_trim_2.mp3", 0, 2 );
echo $response;

$response = SoundExchange::info($file1);
echo $response;

$response = SoundExchange::stats($file1);
echo $response;

$response = SoundExchange::convert( $file2, $outputBase."_convert.mp3", TRUE, 192 );
echo $response;

?>