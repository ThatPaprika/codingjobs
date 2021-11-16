<?php

require_once 'HtmlString.php';

$htmlString = new HtmlString('give a coca-cola please.');
//$htmlString->set_string('Hello, give me a beer.');
echo $htmlString->get_bold_string();
