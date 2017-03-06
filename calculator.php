<?php
require_once 'vendor/autoload.php';
require_once 'lib/Unirest.php';

// These code snippets use an open-source library. http://unirest.io/php
$response = Unirest::get("https://love-calculator.p.mashape.com/getPercentage?fname=John&sname=Alice",
    array(
        "X-Mashape-Key" => "R0T97HICtFmshYZ5DlHCLQgiRLkap1sq7Jpjsnon285UTL41XE",
        "Accept" => "application/json"
    )
);