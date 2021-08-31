<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Bleeding edge updates
    |--------------------------------------------------------------------------
    |
    | If you are developing with TastyIgniter, it is important to have the latest
    | code base, set this value to 'true' to tell the platform to download
    | and use the development copies of core files and extensions.
    |
    */
    'edgeUpdates' => true,

    /*
    |--------------------------------------------------------------------------
    | Site Location Mode.
    |--------------------------------------------------------------------------
    |
    | Set whether to enable support for single or multiple restaurant locations.
    |
    | Supported: "single", "multiple"
    |
    */

    'locationMode' => env('IGNITER_LOCATION_MODE', 'multiple'),

    /*
    |--------------------------------------------------------------------------
    | Specifies the default themes.
    |--------------------------------------------------------------------------
    |
    | This parameter value can be overridden from the admin settings.
    |
    */

    'defaultTheme' => 'demo',

    /*
    |--------------------------------------------------------------------------
    | Back-end URI
    |--------------------------------------------------------------------------
    |
    | Specifies the URI prefix used for accessing admin (back-end) pages.
    |
    */

    'adminUri' => '/admin',

    /*
    |--------------------------------------------------------------------------
    | Themes location
    |--------------------------------------------------------------------------
    |
    | Specifies the relative theme path used for generating themes assets.
    |
    */

    'themesDir' => '/themes',

    /*
    |--------------------------------------------------------------------------
    | Themes location
    |--------------------------------------------------------------------------
    |
    | Specifies the relative theme path used for generating themes assets.
    |
    */

    'assetsDir' => '/assets',

    /*
    |--------------------------------------------------------------------------
    | Determines which modules to load
    |--------------------------------------------------------------------------
    |
    | Specify which modules should be registered when using the application.
    |
    */

    'modules' => ['System', 'Admin', 'Main'],

    /*
    |--------------------------------------------------------------------------
    | Public extensions path
    |--------------------------------------------------------------------------
    |
    | Specifies the public extensions absolute path.
    |
    */

    //'extensionsPath' => base_path('extensions'),

    /*
    |--------------------------------------------------------------------------
    | Public themes path
    |--------------------------------------------------------------------------
    |
    | Specifies the public themes absolute path.
    |
    */

    //'themesPath' => base_path('themes'),

    /*
    |--------------------------------------------------------------------------
    | Public assets path
    |--------------------------------------------------------------------------
    |
    | Specifies the public assets absolute path.
    |
    */

    //'assetsPath' => base_path('assets'),

    /*
    |--------------------------------------------------------------------------
    | Determines if the routing caching is enabled.
    |--------------------------------------------------------------------------
    |
    | If the caching is enabled, the page URL map is saved in the cache. If a page
    | URL was changed on the disk, the old URL value could be still saved in the cache.
    | To update the cache the admin Clear Cache feature should be used. It is recommended
    | to disable the caching during the development, and enable it in the production mode.
    |
    */

    'enableRoutesCache' => FALSE,

    /*
    |--------------------------------------------------------------------------
    | Time to live for the URL map.
    |--------------------------------------------------------------------------
    |
    | The URL map used in the Main page routing process. By default
    | the map is updated every time when a page is saved in the admin or when the
    | interval, in minutes, specified with the urlMapCacheTTL parameter expires.
    |
    */

    'urlMapCacheTtl' => 10,

    /*
    |--------------------------------------------------------------------------
    | Time to live for parsed Template Pages.
    |--------------------------------------------------------------------------
    |
    | Specifies the number of minutes the Template object cache lives. After the interval
    | is expired item are re-cached. Note that items are re-cached automatically when
    | the corresponding template file is modified.
    |
    */

    'parsedTemplateCacheTTL' => 10,

    'parsedTemplateCachePath' => storage_path('system/cache'),

    /*
    |--------------------------------------------------------------------------
    | Assets storage
    |--------------------------------------------------------------------------
    |
    | Specifies the configuration for resource storage, such as media and
    | uploaded files. These resources are used:
    |
    | media   - generated by the media manager.
    | attachment   - generated by attaching media items to models.
    |
    | For each resource you can specify:
    |
    | disk   - filesystem disk, as specified in filesystems.php config.
    | folder - a folder prefix for storing all generated files inside.
    | path   - the public path relative to the application base URL,
    |          or you can specify a full URL path.
    */

    'assets' => [

        'media' => [
            'disk' => 'media',
            'folder' => 'uploads',
            'path' => '/assets/media/uploads',
        ],

        'attachment' => [
            'disk' => 'media',
            'folder' => 'attachments',
            'path' => '/assets/media/attachments',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | URL Linking policy
    |--------------------------------------------------------------------------
    |
    | Controls how URL links are generated.
    |
    | detect   - detect hostname and use the current schema
    | secure   - detect hostname and force HTTPS schema
    | insecure - detect hostname and force HTTP schema
    | force    - force hostname and schema using app.url config value
    |
    */

    'urlPolicy' => 'force',

    /*
    |--------------------------------------------------------------------------
    | Assets combiner URI
    |--------------------------------------------------------------------------
    |
    | Specifies the URI prefix used for accessing combined assets.
    |
    */

    'assetsCombinerUri' => '/_assets',

    /*
    |--------------------------------------------------------------------------
    | Default permission mask
    |--------------------------------------------------------------------------
    |
    | Specifies a default file and folder permission for newly created objects.
    |
    */

    'filePermissions' => '777',
    'folderPermissions' => '777',

    /*
    |--------------------------------------------------------------------------
    | Cross Site Request Forgery (CSRF) Protection
    |--------------------------------------------------------------------------
    |
    | If the CSRF protection is enabled, all "postback" requests are checked
    | for a valid security token.
    |
    */

    'enableCsrfProtection' => TRUE,
];
