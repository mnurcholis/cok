<?php

// For add'active' class for activated route nav-item
function active_class($path)
{
    return call_user_func_array('Request::is', (array)$path) ? '' : 'collapsed';
}

// For checking activated route
function is_active_route($path)
{
    return call_user_func_array('Request::is', (array)$path) ? 'active' : '';
}

// For add 'show' class for activated route collapse
function show_class($path)
{
    return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}

function coba(){
    return \App\Models\Settings::find(1);
}

if (!function_exists('get_menu_web')) {
    function get_menu_web()
    {
        return \App\Models\Menu::where('parent_id', '=', 0)->get();
    }
}
