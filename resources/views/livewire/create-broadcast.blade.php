<div>
    @script
    <script>
        $wire.on('broadcast-created', event => {
            if (fathom) {
                fathom.trackGoal('{{ config('services.fathom.create_broadcast_event_id') }}');
            }
        });
    </script>
    @endscript
    <div class="px-4 pt-8 pb-4">
        <form wire:submit="save">
            <div class="mb-8">
                <label class="font-bold" for="school_district">Name of school district</label><br>
                <input wire:model.live="schoolDistrict" id="school_district" placeholder="Atlanta Public Schools">
                @error('schoolDistrict')<div class="text-red-500">{{ $message }}</div>@enderror
            </div>

            <div class="mb-8">
                <label class="font-bold" for="canceled">Canceled or not</label><br>
                <input type="radio" wire:model.live="canceled" id="canceled-true" value="1" checked> <label for="canceled-true">Canceled</label>
                <input type="radio" wire:model.live="canceled" id="canceled-false" value="0" class="ml-4"> <label for="canceled-false">Not Canceled</label>
                @error('canceled')<div class="text-red-500">{{ $message }}</div>@enderror
            </div>

            <div class="mb-8">
                <label class="font-bold" for="date">Broadcast date</label><br>
                <input type="date" wire:model.live="date" id="date">
                @error('date')<div class="text-red-500">{{ $message }}</div>@enderror
            </div>

            <div class="mb-8">
                <label class="font-bold" for="shortname">URL Shortname</label><br>
                {{ url('') }}/d/<input wire:model="shortname" id="shortname" placeholder="aps" class="w-32">
                <p class="text-gray-500 text-sm">Note: Once your date is past, we'll delete this broadcast, freeing up this shortname to be used again in the future.</p>
                @error('shortname')<div class="text-red-500">{{ $message }}</div>@enderror
            </div>

            <button type="submit" class="px-4 py-2 bg-mint-100 dark:bg-blue-900 rounded hover:bg-mint-200 dark:hover:bg-blue-600 border border-mint-300 dark:border-blue-700 text-lg dark:text-white cursor-pointer">Create broadcast</button>
        </form>
    </div>

    <div class="mt-6 border-t -mx-6">
        <div class="my-4 text-gray-400 ml-6 font-bold text-sm">PREVIEW:</div>

        <marquee class="select-none bg-red-700 text-white px-3 py-1 block">
            @php
                $carbonDate = \Carbon\Carbon::parse($date);
            @endphp
            {{ strtoupper($schoolDistrict ?: '(your school district)') }} UPDATE:
            @if ($canceled)
                School has been canceled because of snow for {{ $carbonDate->format('F j, Y') }}! Turn on the cartoons!
            @else
                Sorry, kids, school has <strong>not</strong> been canceled for {{ $carbonDate->format('F j, Y') }}.
            @endif
        </marquee>
    </div>
</div>
