<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class TraLai extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tra-lai';

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
        $users = User::all();
        foreach ($users as $user) {
            // cộng 5% số dư
            $user->balance += $user->balance * 0.05;
            $user->save();
            // create invest history type 2
            $user->invests()->create([
                'product_id' => 1,
                'amount' => $user->balance * 0.05,
                'status' => 1,
                'completed_at' => now(),
                'accept_at' => now(),
                'type' => 2
            ]);
        }
    }
}
