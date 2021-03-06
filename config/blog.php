<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Canvas Configuration : Installed Version
    |--------------------------------------------------------------------------
    |
    | The version of Canvas that will be utilized in the initial installation
    | process.
    |
    */
    'version' => 'v2.1.15',

    /*
    |--------------------------------------------------------------------------
    | Canvas Configuration : Blog Index Page
    |--------------------------------------------------------------------------
    |
    | Pretty self-explanatory here. Indicate how many posts you would like
    | to appear on each page. If you are using Disqus, specify the
    | identifier in your .env file.
    |
    */
    'posts_per_page' => 6,

    /*
    |--------------------------------------------------------------------------
    | Canvas Configuration : Trim Width
    |--------------------------------------------------------------------------
    |
    | To make sure post subtitles and post excerpts display properly in
    | the application, we need to trim the width of them and simply
    | add an ellipses at the trim point.
    |
    | backend_trim_width: NOT IN USE
    | frontend_trim_width: Used in the individual post view template
    |
    */
    'backend_trim_width' => 40,
    'frontend_trim_width' => 225,

    /*
    |--------------------------------------------------------------------------
    | Canvas Configuration : Post Layout
    |--------------------------------------------------------------------------
    |
    | The post layout is only specified in App\Jobs\PostFormFields.php.
    | If you need to update the layout, just change it there.
    |
    */
    'post_layout' => \App\Jobs\PostFormFields::$blogLayout,

    /*
    |--------------------------------------------------------------------------
    | Canvas Configuration : Tag Layout
    |--------------------------------------------------------------------------
    |
    | The tag layout is specified here, in App\Http\Controllers\Backend\TagController.php
    | and in App\Models\Tag.php. If you need to update the layout, just change it
    | in these three locations.
    |
    */
    'tag_layout' => 'frontend.blog.index',
];
