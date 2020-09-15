<?php

namespace Zijinghua\Zchat;

use Illuminate\Support\ServiceProvider;
use Zijinghua\Zchat\Providers\RouteServiceProvider;

class ZServiceProvider extends ServiceProvider
{
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->registerConsoleCommands();
            $this->registerPublishableResources();
        }
        $this->registerProvider();
    }

    public function boot()
    {
        $this->mergeConfig();
    }

    private function registerProvider(){
        $this->app->register(RouteServiceProvider::class);
    }

    public function registerConsoleCommands()
    {
        $this->commands(Commands\Install::class);
    }

    protected function registerPublishableResources()
    {
        //
    }

    protected function getPublishablePath()
    {
        return realpath(__DIR__.'/../publishable');
    }

    protected function mergeConfig()
    {
        $this->mergeConfigFrom( $this->getPublishablePath(). '/configs/chat.php', 'zchat.chat');
        $this->mergeConfigFrom( $this->getPublishablePath(). '/configs/code/group.php', 'zbasement.code.chatgroup');
        $this->mergeConfigFrom( $this->getPublishablePath(). '/configs/validation/rules/group.php', 'zbasement.validation.rules.chatgroup');
        $this->mergeConfigFrom( $this->getPublishablePath(). '/configs/validation/messages/group.php', 'zbasement.validation.messages.chatgroup');

        $this->mergeConfigFrom( $this->getPublishablePath(). '/configs/code/message.php', 'zbasement.code.chatmessage');
        $this->mergeConfigFrom( $this->getPublishablePath(). '/configs/validation/rules/message.php', 'zbasement.validation.rules.chatmessage');
        $this->mergeConfigFrom( $this->getPublishablePath(). '/configs/validation/messages/message.php', 'zbasement.validation.messages.chatmessage');

        $this->mergeConfigFrom( $this->getPublishablePath(). '/configs/code/record.php', 'zbasement.code.chatrecord');
        $this->mergeConfigFrom( $this->getPublishablePath(). '/configs/validation/rules/record.php', 'zbasement.validation.rules.chatrecord');
        $this->mergeConfigFrom( $this->getPublishablePath(). '/configs/validation/messages/record.php', 'zbasement.validation.messages.chatrecord');
    }
}
