<x-public-layout>
    <h2 class="bg-blue-200 text-xl font-bold py-4 text-center -mx-6 -mt-6">Create a new snow day broadcast</h2>

    <div class="px-4 pt-8 pb-4">
        <form action="{{ route('snow-days.store') }}" method="post">
            @csrf

            <div class="mb-8">
                <label class="font-bold" for="school-district">Name of school district</label><br>
                <input name="school-district" id="school-district" placeholder="Atlanta Public Schools">
            </div>

            <div class="mb-8">
                <label class="font-bold" for="canceled">Canceled or not</label><br>
                <input type="radio" name="canceled" id="canceled-true" value="true" checked> <label for="canceled-true">Canceled</label>
                <input type="radio" name="canceled" id="canceled-false" value="false" class="ml-4"> <label for="canceled-false">Not Canceled</label>
            </div>

            <div class="mb-8">
                <label class="font-bold" for="date">Broadcast date</label><br>
                <input type="date" name="date" id="date" value="{{ now()->addDay()->format('Y-m-d') }}">
            </div>

            <div class="mb-8">
                <label class="font-bold" for="shortname">URL Shortname</label><br>
                {{ url('') }}/d/<input name="shortname" id="shortname" placeholder="aps" class="w-32">
                <p class="text-gray-500 text-sm">Note: Once your date is past, we'll delete this broadcast, freeing up this shortname to be used again in the future.</p>
            </div>

            <input type="submit" class="border px-3 py-2 hover:bg-blue-100 hover:cursor-pointer font-bold" value="Create broadcast">
        </form>
    </div>
</x-public-layout>
