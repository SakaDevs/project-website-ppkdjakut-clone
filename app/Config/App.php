<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Cookie Related Variables
     * --------------------------------------------------------------------------
     */
    public string $cookiePrefix   = '';
    public string $cookieDomain   = '';
    public string $cookiePath     = '/';
    public bool   $cookieSecure   = false;
    public bool   $cookieHTTPOnly = true;

    /**
     * --------------------------------------------------------------------------
     * Base Site URL
     * --------------------------------------------------------------------------
     */
    public string $baseURL = 'http://localhost:8080/';

    public array $allowedHostnames = [];

    public string $indexPage = '';
    public string $uriProtocol = 'REQUEST_URI';
    public string $permittedURIChars = 'a-z 0-9~%.:_\-';

    public string $defaultLocale = 'id'; // ubah ke 'id' kalau mau bahasa Indonesia default
    public bool   $negotiateLocale = false;
    public array  $supportedLocales = ['id', 'en'];

    public string $appTimezone = 'Asia/Jakarta';
    public string $charset = 'UTF-8';

    public bool $forceGlobalSecureRequests = false;
    public array $proxyIPs = [];

    public bool $CSPEnabled = false;
}
