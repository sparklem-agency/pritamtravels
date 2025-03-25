@props(['image', 'name', 'stars', 'badge' => null])
<div
    class="bg-white overflow-hidden shadow-md rounded-3xl border hover:scale-105 transition-all ease-in-out duration-300 hover:rotate-1 relative">

    <!-- Badge (Will Show Always) -->
    @if ($badge)
        <span class="bg-secondary p-3 font-medium text-white absolute top-0 left-0 z-10 rounded-br-3xl">
            {{ $badge }}
        </span>
    @endif

    <div class="overflow-hidden rounded-t-3xl h-60 w-full">
        <img src="{{ $image }}" alt="" class="w-full min-h-60 object-cover">
    </div>

    <div class="p-5 space-y-3">
        <div>
            <h2 class="font-bold text-xl">{{ $name }}</h2>
        </div>

        <div class="flex items-center gap-1 text-yellow-600 font-bold">
            {{ $stars }}
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="currentColor">
                <path
                    d="M23.9996 12.0235C17.5625 12.4117 12.4114 17.563 12.0232 24H11.9762C11.588 17.563 6.4369 12.4117 0 12.0235V11.9765C6.4369 11.5883 11.588 6.43719 11.9762 0H12.0232C12.4114 6.43719 17.5625 11.5883 23.9996 11.9765V12.0235Z">
                </path>
            </svg>
        </div>
    </div>
</div>
