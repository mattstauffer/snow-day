<?php

namespace App\Actions;

use App\Models\Broadcast;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class LogCreatedBroadcast
{
    public function __invoke(Broadcast $broadcast)
    {
        // @todo: move this into a job that can be retried on its own system later

        try {
            Http::withToken(config('services.fathom.key'))->post('https://api.usefathom.com/v1/sites/' . config('services.fathom.id') . '/events', [
                'school district' => $broadcast->school_district,
            ]);
        } catch (Throwable $e) {
            Log::error('Failed pushing "created broadcast" event to Fathom. Broadcast: ' . $broadcast->school_district);
        }
    }
}
