<?php
declare(strict_types=1);

abstract class TestCase extends Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            EspadaV8\Breadcrumbs\ServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Breadcrumbs' => EspadaV8\Breadcrumbs\Facade::class,
        ];
    }

    public function setUp()
    {
        parent::setUp();

        $this->loadServiceProvider();
    }

    protected function loadServiceProvider()
    {
        // Need to trigger register() to test the views
        $this->app->make('breadcrumbs');
    }

    public function tearDown()
    {
        $this->addToAssertionCount(Mockery::getContainer()->mockery_getExpectationCount());

        Mockery::close();
    }
}
