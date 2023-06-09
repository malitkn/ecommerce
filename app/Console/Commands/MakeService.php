<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MakeService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a Service Class';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $serviceName = $this->argument('name');
        $serviceClass = Str::studly($serviceName);
        $servicePath = app_path('Services/' . $serviceClass . '.php');

        $stub = file_get_contents('stubs/service.stub');
        $stub = str_replace('serviceClass', $serviceClass, $stub);

        file_put_contents($servicePath, $stub);

        $this->info($serviceClass . ' created successfully.');
    }
}
