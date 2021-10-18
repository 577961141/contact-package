<?php

namespace Bitfumes\Contact;

use Illuminate\Support\ServiceProvider;


/**
 *
 * @author weirui
 * @date 2021-10-12
 */
class ContactServiceProvider extends ServiceProvider
{
    public function register()
    {


    }

    public function boot()
    {
        // 识别路由
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        // 识别视图 给定义视图加上命名空间
        $this->loadViewsFrom(__DIR__. '/views', 'contact');
        // 识别数据库迁移
        $this->loadMigrationsFrom(__DIR__. '/database/migrations');
        // 这个的作用并不是像文档里说的那样，当前目录的/config/contact.php合并/config/contact.php。而是如果没有/config/contact.php就选择当前目录的/config/contact.php(要想使用配置文件必须有这一条)
        $this->mergeConfigFrom(__DIR__.'/config/contact.php', 'contact');

        // 进行包发布(命令：php artisan vendor:push,然后选择你的包)
        $this->publishes([
            // 发布配置文件(发布后的配置文件会在/config目录下)
            __DIR__ . '/config/contact.php' => config_path('contact.php'),
            // 帆布视图文件(发布后的视图文件会在resource/views/vendor/contact下)
            __DIR__ . '/views' => resource_path('views/vendor/contact')
        ]);

    }
}
