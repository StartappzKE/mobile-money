<?php

namespace DervisGroup\Pesa\Tests\Unit;

use DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkRequest;
use DervisGroup\Pesa\Tests\TestCase;
use Illuminate\Database\Eloquent\Model;

class MigrationTest extends TestCase
{
    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->loadLaravelMigrations(['--database' => 'testing']);
        $this->artisan('migrate', ['--database' => 'testing']);
        Model::unguard();
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testing');
    }

    /** @test */
    public function it_runs_the_migrations()
    {
        MpesaStkRequest::create([
            'phone' => '254722000000',
            'amount' => 70000,
            'reference' => 'Test Case',
            'description' => 'My tests are running',
            'CheckoutRequestID' => 'ws_CO_02052018230213621',
            'MerchantRequestID' => '10054-2753415-2'
        ]);
        $request = MpesaStkRequest::first();
        $this->assertEquals(70000, $request->amount);
        $this->assertEquals('ws_CO_02052018230213621', $request->CheckoutRequestID);
        $this->assertNotNull($request->created_at);
    }
}
