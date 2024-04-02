<?php

$load_release_hash = function () {
    $map = get_template_directory().'/anticache.json';
    if (!file_exists($map)) {
        return '';
    }
    $content = json_decode(file_get_contents($map));
    if (!is_object($content) || !isset($content->anticache)) {
        return '';
    }

    return $content->anticache;
};

define('ANTICACHE_HASH', $load_release_hash());
define('NEWS_POST_TYPE', 'news');
define('INTERVIEW_POST_TYPE', 'interview');

define('WORKS_POST_TYPE', 'works');
define('WORKS_POST_TYPE_CATEGORY', 'works-category');
define('WORKS_POST_TYPE_TAG', 'works-tag');

define('PENGUIN_POST_TYPE', 'penguin');
define('PENGUIN_POST_TYPE_CATEGORY', 'penguin-category');
define('PENGUIN_POST_TYPE_TAG', 'penguin-tag');
