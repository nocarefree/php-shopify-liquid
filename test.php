<?php 

include(__DIR__."/vendor/autoload.php");

use Liquid\Liquid;
use Liquid\Regexp;


// $str = "font_display: 'swap'";
// var_dump(\Liquid\Arguments::parse($str));


$template = new Ncf\ShopifyLiquid\ShopifyTemplate(__DIR__.'/tests/templates/crave');
$contents = $template->render('index',[]);


file_put_contents('2.txt',$contents);