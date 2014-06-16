<?php

function debug($var) {
    if (Conf::$debug) {
        $backtrace = debug_backtrace();
        echo '<p>&nbsp</p>'
        . '<p><a href="#"><strong>' . $backtrace[0]['file'] . '</strong>'
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
