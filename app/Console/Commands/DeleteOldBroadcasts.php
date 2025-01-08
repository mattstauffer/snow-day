<?php

namespace App\Console\Commands;

use App\Models\Broadcast;
use Illuminate\Console\Command;

class DeleteOldBroadcasts extends Command
{
    protected $signature = 'app:delete-old-broadcasts';

    protected $description = 'Delete old broadcasts so they can be re-used.';

    public function handle()
    {
        Broadcast::where('date', '<', now()->subDays(2))->delete();
    }
}
