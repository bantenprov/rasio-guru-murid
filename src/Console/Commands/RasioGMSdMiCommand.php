<?php namespace Bantenprov\RasioGMSdMi\Console\Commands;

use Illuminate\Console\Command;

/**
 * The RasioGMSdMiCommand class.
 *
 * @package Bantenprov\RasioGMSdMi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioGMSdMiCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:rasio-guru-murid-sd-mi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\RasioGMSdMi package';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info('Welcome to command for Bantenprov\RasioGMSdMi package');
    }
}
