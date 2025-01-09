<?php

use App\Console\Commands\DeleteOldBroadcasts;
use App\Models\Broadcast;

test('it deletes old broadcasts', function () {
    Broadcast::factory()->create([
        'date' => now()->subDays(3),
    ]);

    (new DeleteOldBroadcasts)->handle();

    $this->assertEquals(0, Broadcast::count());
});

test('it does not delete recent broadcasts', function () {
    Broadcast::factory()->create([
        'date' => now()->subDays(1),
    ]);
    Broadcast::factory()->create([
        'date' => now(),
    ]);

    (new DeleteOldBroadcasts)->handle();

    $this->assertEquals(2, Broadcast::count());
});

test('it does not delete future broadcasts', function () {
    Broadcast::factory()->create([
        'date' => now()->addDay(),
    ]);

    (new DeleteOldBroadcasts)->handle();

    $this->assertEquals(1, Broadcast::count());
});
