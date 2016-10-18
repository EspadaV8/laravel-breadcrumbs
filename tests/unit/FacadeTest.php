<?php

class FacadeTest extends TestCase {

	public function testFacade()
	{
		$this->assertInstanceOf('EspadaV8\Breadcrumbs\Manager', Breadcrumbs::getFacadeRoot());
		$this->assertSame($this->app['breadcrumbs'], Breadcrumbs::getFacadeRoot());
	}

}
