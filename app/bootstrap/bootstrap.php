<?php


$routes = [
    ['pagination' => 'PaginationController']
];

$pages = Routes::process($routes);

if (sizeof($pages) > 0) {
    echo json_encode($pages);
    die();
}
