<?php

// In a helper file or Blade directive file

if (!function_exists('setSidebarActive')) {
    /**
     * Set the active state for the sidebar menu item.
     *
     * @param array $routes
     * @return string
     */
    function setSidebarActive(array $routes)
    {
        return request()->routeIs($routes) ? 'active' : '';
    }
}
