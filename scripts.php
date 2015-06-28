<?php
/*
*** TO ADD/REMOVE SCRIPTS FROM THE WEBSITE - PLEASE GO TO /resources/javascripts.json
*** THIS FILE CONTAINS JUST SCRIPT TO PARSE <script> FOR PROPER JS FILES
*/

$status = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/../resources/status.json'));

if($status->code == 'dev') {
    $scripts = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/../resources/javascripts.json'));

    foreach($scripts->vendor as $vendor) {
        echo '<script src="/vendor/'.$vendor.'"></script>';
    }

    foreach($scripts->app as $script) {
        echo '<script src="/js/'.$script.'"></script>';
    }

    echo '<script src="//localhost:35729/livereload.js"></script>';
}
else {
    echo '<script async src="/js/global.min.js"></script>';
}