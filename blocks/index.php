<?php
function get_block($block){
    require dirname(__FILE__) . '/' . $block . '.php';
}