<x-public-layout>
    <div class="bg-gray-800 text-white px-3 py-1">
        {{ strtoupper($broadcast->school_district) }} UPDATE:
        School has been
        {{ $broadcast->canceled ? '' : 'not '}} canceled because of snow for
        {{ $broadcast->date->format('F j, Y')}}.
    </div>
</x-public-layout>
