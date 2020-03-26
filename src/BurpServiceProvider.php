<?php

namespace Writecl\Burp;

use Illuminate\Support\ServiceProvider;

class BurpServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    public function register()
    {

        $this->app->booting(function () {
            $loader  =  \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Burp', 'Writecl\Burp\Burp');
            $loader->alias('BurpEvent', 'Writecl\Burp\BurpEvent');

        });

    }

}
