<?php

namespace Sepisoltani\Iran\Console;

use Illuminate\Console\Command;
use Sepisoltani\Iran\Database\seeders\CitiesTableSeeder;
use Sepisoltani\Iran\Database\seeders\CountriesTableSeeder;
use Sepisoltani\Iran\Database\seeders\ProvincesTableSeeder;

class init extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init:iran';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run migration and fill the database with provinces , countries and cities';

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
        $this->info('Execute migrate first, migrating ...');
        $this->call('migrate');
        $this->info('Seeding Data ...');
        $this->call('db:seed', ['--class' => ProvincesTableSeeder::class]);
        $this->call('db:seed', ['--class' => CountriesTableSeeder::class]);
        $this->call('db:seed', ['--class' => CitiesTableSeeder::class]);
        $this->info('Done!');

        return 1;
    }
}
