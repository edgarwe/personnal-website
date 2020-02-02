<?php
function get_block($block){
    require_once dirname(__FILE__) . '/' . $block . '.php';
}