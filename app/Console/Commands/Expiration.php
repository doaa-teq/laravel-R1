<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
class Expiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
     protected $signature = 'user:expiration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::where('expire', 0)->get();
      foreach($users as $user){
      $user->update(['expire'=>1]);

       }
    }
}
