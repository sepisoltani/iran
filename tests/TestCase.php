<?php
namespace Sepisoltani\Iran\Tests;



use Illuminate\Foundation\Application;
use Sepisoltani\Iran\IranServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->loadMigrationsFrom(__DIR__.'../src/Database/migrations');
    }

    /**
     * @param Application $app
     * @return array|string[]
     */
    protected function getPackageProviders($app)
    {
        return [
            IranServiceProvider::class,
        ];
    }
    /**
     * @param Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }

    public function test_nothing()
    {
        $this->assertTrue(true);
    }
}
