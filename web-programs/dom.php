<?php
error_reporting(E_ALL);
// $html = file_get_contents('https://adamalex.com/');
$html = file_get_html('http://www.google.com/');

foreach($html->find('img') as $element) 
       echo $element->src . '<br>';

