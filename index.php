<?php

require_once 'Verification.php';
require_once 'News.php';
require_once 'Blog.php';

$news = new News('Hello World!', 'The director greeted the students');
$blog = new Blog('Hello World!', 'The director greeted the students');