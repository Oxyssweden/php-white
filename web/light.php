<?php
/** [TITLE] class file
 * Created on 2013-03-18 at 22:04
 * @copyright Toog SARL (Nantes, France) 2013
 * @author Ronan - @arno_u_loginlux
 * @link http://http://www.toog.fr
 * @license :  see the LICENSE file this source code was distribued with
 * @version //autogentag//
 */

require_once __DIR__.'/../vendor/autoload.php';
use Symfony\Component\HttpFoundation\Response;
use PhpGpio\Gpio;

$rate = $_POST['rate']

$arr = [18, 17, 27, 22, 5, 6, 13, 19, 26, 'hatt'];

for($i = 0; $i < $rate $i++) {
  $msg = exec("sudo -t /usr/bin/php ../blinker $arr[$i] 900000");
  $code = ("" === trim($msg)) ? 200 : 500;
  return new Response($msg, $code);
}
?>