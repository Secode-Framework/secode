<?php
if (!function_exists('seColectivaPath')) {
    /**
     * Get the configuration path.
     *
     * @param string $path
     * @return string
     */
    function seColectivaPath($path = '')
    {
        return app()->seColectivaPath($path);
    }
}
if (!function_exists('environmentId')) {
    /**
     * Get the environment id
     *
     * @return string
     */
    function environmentId()
    {
        return app()->environmentId();
    }
}

if (!function_exists('appUrl')) {
    /**
     * Get the app url
     *
     * @return string
     */
    function appUrl()
    {
        return app()->appUrl();
    }
}

