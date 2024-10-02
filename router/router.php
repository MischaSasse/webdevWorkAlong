<?php
class Route
{
    private $routes = [
        [
            'url' => '/about', // regular expression.
            'controller' => 'controllers/AboutController',
            'action' => 'redirect("about")'
        ],
        [
            'url' => '/contact', // regular expression.
            'controller' => 'controllers/ContactController',
            'action' => 'redirect("contact")'
        ],
        [
            'url' => '/',
            'controller' => 'controllers/Controller',
            'action' => 'redirect("index")'
        ]
    ];

    public function __contstruct() {}

    public function getRoutes()
    {
        return $this->routes;
    }
}
