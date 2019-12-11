<?php
/**
 * unit-google:/Google.class.php
 *
 * @creation  2018-02-16
 * @version   1.0
 * @package   unit-google
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @creation  2018-02-16
 */
namespace OP\UNIT;

/** google
 *
 * @creation  2018-02-16
 * @version   1.0
 * @package   unit-google
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class Google
{
	/** trait
	 *
	 */
	use \OP_CORE;

	/** OAuth
	 *
	 */
	function OAuth()
	{

	}

	/** Translation
	 *
	 */
	function Translation($source, $target, $string)
	{
		//	...
		if(!class_exists('\OP\UNIT\GOOGLE\Translation') ){
			//	...
			$path = __DIR__.'/Translation.class.php';

			//	...
			if(!include($path) ){
				throw new \Exception("Include was failed. \n($path)");
			}
		}

		//	...
		$config = [];
		$config['source'] = $source;
		$config['target'] = $target;
		$config['string'] = $string;
		if(!$result = GOOGLE\Translation::Translate($config) ){
			D(GOOGLE\Translation::Errors());
		}

		//	...
		return $result[0];
	}
}
