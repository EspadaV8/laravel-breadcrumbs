<?php
declare(strict_types=1);

class CustomServiceProviderTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            CustomServiceProvider::class,
        ];
    }

    public function testRender()
    {
        $html = Breadcrumbs::render('home');
        $this->assertXmlStringEqualsXmlFile(__DIR__ . '/../fixtures/CustomServiceProvider.html', $html);
    }
}

class CustomServiceProvider extends EspadaV8\Breadcrumbs\ServiceProvider
{
    public function registerBreadcrumbs()
    {
        Breadcrumbs::register('home', function ($breadcrumbs) {
            $breadcrumbs->push('Home', '/');
        });
    }
}
