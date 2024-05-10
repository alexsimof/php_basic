<?php

require_once 'Verification.php';
require_once 'News.php';
require_once 'Blog.php';

$title = 'Hello World!';
$content = 'The director greeted the students';
$title1 = "What's up!";
$content1 = 'Student life';


try {
    $news = new News($title, $content);
    $blog = new Blog($title1, $content1);

} catch (Exception $e) {
    $errorMessage = $e->getMessage();
}