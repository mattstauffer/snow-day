<?php

use App\Models\Broadcast;

test('before the day, it says check back', function () {
    $broadcast = Broadcast::factory()->create([
        'date' => now()->addDay(),
    ]);

    $response = $this->get(route('broadcasts.show', $broadcast));
    $response->assertSee('Check back on');
});

test('on the day, it shows if it has been canceled', function () {
    $broadcast = Broadcast::factory()->create([
        'date' => now()->subHours(1),
        'canceled' => true,
    ]);

    $response = $this->get(route('broadcasts.show', $broadcast));
    $response->assertSee('School has been canceled');

    $broadcast = Broadcast::factory()->create([
        'date' => now()->subHours(1),
        'canceled' => false,
    ]);

    $response = $this->get(route('broadcasts.show', $broadcast));
    $response->assertSee('Sorry, kids');
});
