<?php
namespace Sepisoltani\Iran\Tests;



use Sepisoltani\Iran\IranServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__.'../src/Database/migrations');

    }

    protected function getPackageProviders($app)
    {
        return [
            IranServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
