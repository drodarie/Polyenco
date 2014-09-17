<?php

function debug($var) {
    if (Conf::$debug>0) {
        $backtrace = debug_backtrace();
        echo '<p>&nbsp</p>'
        . '<p><a href="#" onclick="$(this).parent().next(\'ol\').slideToggle():return false;"><strong>' . $backtrace[0]['file'] . '</strong>'
        . 'Line: ' . $backtrace[0]['line'] . '</a></p>';

        echo '<ol style="display:none;">';
        foreach ($backtrace as $k => $v) {
            if ($k > 0) {
                echo '<li><strong>' . $v['file'] . '</strong>'
                . 'Line: ' . $v['line'] . '</li>';
            }
        }
        echo '</ol>';

        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}

function cleanVar ($var){
    return htmlspecialchars($var, ENT_QUOTES, 'UTF-8', false);
}

