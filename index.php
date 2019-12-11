<?php
/**
 * unit-google:/index.php
 *
 * @created   2017-06-08
 * @version   1.0
 * @package   unit-google
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @created
 */
namespace OP;

/** Used class
 *
 * @created   2019-04-01
 */

//	...
if(!Unit::Load('curl')){
	return false;
}

//	...
include('Google.class.php');
