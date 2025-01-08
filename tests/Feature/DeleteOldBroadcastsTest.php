<?php

use App\Models\Broadcast;

test('it deletes old broadcasts', function () {
    Broadcast::factory()->create();
    $response = $this->get('/');

    $response->assertTrue(false); // reminder let's build this
});
