<?php

namespace Mos\Navbar;

/**
 * Navbar to generate HTML för a navbar from a configuration array.
 */
class Navbar implements \Anax\Common\ConfigureInterface
{
    use \Anax\Common\ConfigureTrait;

    /**
     * Get HTML for the navbar.
     *
     * @return string as HTML with the navbar.
     */
    public function getHTML()
    {
        ;
    }



    /**
     * Get HTML for the navbar.
     *
     * @param string $route the current route.
     * @param callable $urlCreate to create framework urls.
     *
     * @return string as HTML with the navbar.
     */
    public function getHTML2($route, $urlCreate)
    {
        ;
    }



    /**
     * Sets the current route.
     *
     * @param string $route the current route.
     *
     * @return void
     */
    public function setCurrentRoute($route)
    {
        ;
    }



    /**
     * Sets the callable to use for creating routes.
     *
     * @param callable $urlCreate to create framework urls.
     *
     * @return void
     */
    public function setUrlCreator($urlCreate)
    {
        ;
    }
}
