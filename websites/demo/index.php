<?php
// index.php

require 'data.php';


$millionaires = array_filter($playerHistory, function($player) {
    return $player['money'] > 5000000;
});

require 'index.view.php';