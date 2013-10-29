<?php
class Config {
	public static function get($string) {
		echo $GLOBALS[$string];
	}
}
?>