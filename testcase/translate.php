<?php
/**
 * module-testcase:/unit/google/translate.php
 *
 * @creation  2019-04-06
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @creation  2019-04-06
 */
namespace OP;

/* @var $app    UNIT\App    */
/* @var $google UNIT\Google */
$google = $app->Unit('Google');

//	...
list($lang) = explode(':', $app->Unit('Router')->G11n());

//	...
$string = $_GET['string'] ?? 'Test of Google cloud translation was successful.';

//	...
if( $lang !== 'en' ){
	$translate = $google->Translate('ja', 'en', [$string]);
};

//	...
D($string .' → '. ($translate[0] ?? null));

//	...
D($google->Language());

//	...
$google->Debug();
$app->Unit('Curl')->Debug();
