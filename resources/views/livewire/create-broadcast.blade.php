<div class="px-4 pt-8 pb-4">
    <form wire:submit="save">
        <div class="mb-8">
            <label class="font-bold" for="school_district">Name of school district</label><br>
            <input wire:model="schoolDistrict" id="school_district" placeholder="Atlanta Public Schools">
            @error('schoolDistrict')<div class="text-red-500">{{ $message }}</div>@enderror
        </div>

        <div class="mb-8">
            <label class="font-bold" for="canceled">Canceled or not</label><br>
            <input type="radio" wire:model="canceled" id="canceled-true" value="1" checked> <label for="canceled-true">Canceled</label>
            <input type="radio" wire:model="canceled" id="canceled-false" value="0" class="ml-4"> <label for="canceled-false">Not Canceled</label>
            @error('canceled')<div class="text-red-500">{{ $message }}</div>@enderror
        </div>

        <div class="mb-8">
            <label class="font-bold" for="date">Broadcast date</label><br>
            <input type="date" wire:model="date" id="date">
            @error('date')<div class="text-red-500">{{ $message }}</div>@enderror
        </div>

        <div class="mb-8">
            <label class="font-bold" for="shortname">URL Shortname</label><br>
            {{ url('') }}/d/<input wire:model="shortname" id="shortname" placeholder="aps" class="w-32">
            <p class="text-gray-500 text-sm">Note: Once your date is past, we'll delete this broadcast, freeing up this shortname to be used again in the future.</p>
            @error('shortname')<div class="text-red-500">{{ $message }}</div>@enderror
        </div>

        <button type="submit" class="border px-3 py-2 hover:bg-blue-100 hover:cursor-pointer font-bold">Create broadcast</button>
    </form>
</div>
