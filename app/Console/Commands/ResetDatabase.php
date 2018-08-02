<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;

class ResetDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:repopulate';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command is used to repopulate database with prefixed data.';
    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->callSilent('migrate:refresh');
        $this->info('Migrations refreshed.');
        $this->callSilent('db:seed');
        $this->info('Database seeded.');
        $this->callSilent('config:cache');
        $this->info('Configuration parameters refreshed and cached.');
        $this->callSilent('route:cache');
        $this->info('Routes refreshed and cached.');
        $this->info('Everything is set and ready to go.');
    }
}
