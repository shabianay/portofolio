<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeployRender extends Command
{
    protected $signature = 'deploy:render';
    protected $description = 'Run deployment tasks for Render';

    public function handle()
    {
        $this->call('config:cache');
        $this->call('route:cache');
        $this->call('view:cache');
        $this->call('migrate', ['--force' => true]);
        $this->call('storage:link');
        $this->info('Deployment complete.');
    }
}
