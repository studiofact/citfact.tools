<?php

/*
 * This file is part of the Studio Fact package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Citfact;

class Tools
{
	/**
	 * @param $var
	 * @param bool $stdin
	 * @param bool $die
	 * @param bool $all
	 * @return mixed
	 */
	public static function pre($var, $stdin=false, $die=false, $all=false){
		global $USER;
		if($USER->IsAdmin() || $all){
			if($stdin){
				return print_r($var, $stdin);
			}?>
			<pre><?print_r($var, $stdin)?></pre>
		<?
		}
		if($die) die;
	}
	
	/**
	 * @param int $number
	 * @param array $titles
	 *
	 * @return string word
	 */
	public static function declension($number, $titles)
	{
		$cases = array(2, 0, 1, 1, 1, 2);

		return $number.' '.$titles[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)]];
	}

	/**
	 * @param string $date_from
	 * @param string $date_to
	 * @return array
	 */
	public static function datediff($date_from, $date_to)
	{
		$date_from = new \DateTime($date_from);
		$date_to = new \DateTime($date_to);
		$interval = $date_from->diff($date_to);
		$arReturn = array(
			'days' => $interval->days,
			'm' => $interval->m,
			'd' => $interval->d,
		);

		return $arReturn;
	}

}