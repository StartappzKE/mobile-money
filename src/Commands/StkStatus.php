<?php

namespace DervisGroup\Pesa\Commands;


use DervisGroup\Pesa\Repositories\Mpesa;
use Illuminate\Console\Command;

class StkStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pesa:query_status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check status of all pending transactions';
    /**
     * @var Mpesa
     */
    private $mpesa;

    /**
     * Create a new command instance.
     *
     * @param Mpesa $registerUrl
     */
    public function __construct(Mpesa $registerUrl)
    {
        parent::__construct();
        $this->mpesa = $registerUrl;
    }

    /**
     * Execute the console command.
     *
     */
    public function handle()
    {
        return $this->mpesa->queryStkStatus();
    }
}