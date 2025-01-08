<?php

namespace App\Livewire;

use App\Models\Broadcast;
use Livewire\Component;

class CreateBroadcast extends Component
{
    public $schoolDistrict;
    public $canceled = true;
    public $date;
    public $shortname;

    public function mount()
    {
        $this->date = now()->addDay()->format('Y-m-d');
    }

    public function save()
    {
        $validated = $this->validate([
            'schoolDistrict' => 'required',
            'canceled' => 'required|boolean',
            'date' => 'required|date',
            'shortname' => 'required|unique:broadcasts,shortname',
        ]);

        $broadcast = Broadcast::create([
            'school_district' => $validated['schoolDistrict'], // @todo: Is there a way to avoid having to map this?
            'canceled' => $validated['canceled'],
            'date' => $validated['date'],
            'shortname' => $validated['shortname'],
        ]);

        return redirect()->to(route('broadcasts.show', $broadcast));
    }

    public function render()
    {
        return view('livewire.create-broadcast');
    }
}
