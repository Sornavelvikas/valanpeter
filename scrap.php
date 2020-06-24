<?php
require_once "simple_html_dom.php";

$dom = file_get_html("http://senthuherbals.blogspot.com/?m=1", false);
$answer = array();
$i =0;
if(!empty($dom)) {
    foreach($dom->find(".item") as $divClass) {
        //title
        print_r('checkli');
        foreach($divClass->find(".article-header .title.entry-title") as $title ) {
            $answer[$i]['title'] = $title->plaintext;
        }
        $i++;
    }
}
print_r($answer);
print_r('check');
die();