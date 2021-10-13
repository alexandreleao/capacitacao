<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:explode';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Explode exemplo';

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
        $email = "alexandre@gmail.com ";

        $explode = explode('@', $email);

        if($explode[1] === 'gmail.com'){
            $this->line('É GMAIL');
        } else {
            $this->line('Não é GMAIL');
        }

        
        
        //$this->line(
    }
}
