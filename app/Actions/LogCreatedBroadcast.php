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
        // I think I may have misunderstood what "create event" means in Fathom land. Pausing on this for now.
        return;
        // @todo: move this into a job that can be retried on its own system later

        try {
            $response = Http::withToken(config('services.fathom.key'))->post('https://api.usefathom.com/v1/sites/' . config('services.fathom.id') . '/events', [
                'name' => 'Create broadcast'
            ]);
        } catch (Throwable $e) {
            Log::error('Failed pushing "created broadcast" event to Fathom. Broadcast: ' . $broadcast->school_district . '. Message: ' . $e->getMessage());
        }
    }
}
