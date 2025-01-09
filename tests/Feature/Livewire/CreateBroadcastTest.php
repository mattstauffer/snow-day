<?php

use App\Livewire\CreateBroadcast;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(CreateBroadcast::class)
        ->assertStatus(200);
});

// @todo: Build more tests
