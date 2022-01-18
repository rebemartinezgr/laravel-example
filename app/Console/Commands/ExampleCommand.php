<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'example:execute {Argument} {optionalArgument?} {defaultArgument=defaultArgumentValue} {--option} {--valueOption=} {--defaultValueOption=default}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $arguments = $this->arguments();
        print_r($arguments);
        $options = $this->options();
        print_r($options);
        if ($this->confirm('Do you wish to continue?', true)) {
            $name = $this->ask('What is your name?');
            print_r($name);
            $password = $this->secret('What is the password?');
            print_r($password);
        }
        return 0;
    }
}
