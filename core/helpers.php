<?php
namespace Core\Helpers;

function truncate ($string, int $lg_max = 300) {
    if (strlen($string) > $lg_max):
    
        $string = substr($string, 0, $lg_max);
        $last_space = strrpos($string, " ");
        return substr($string, 0, $last_space)."...";
    endif;
    return $string;
}