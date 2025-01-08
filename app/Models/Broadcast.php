<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broadcast extends Model
{
    /** @use HasFactory<\Database\Factories\BroadcastFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName(): string
    {
        return 'shortname';
    }

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }
}
