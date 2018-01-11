<?php
namespace zongphp\log;

use zongphp\framework\build\Provider;

class LogProvider extends Provider
{
    //延迟加载
    public $defer = false;

    public function boot()
    {
    }

    public function register()
    {
        $this->app->single('Log', function () {
            return Log::single();
        });
    }
}
