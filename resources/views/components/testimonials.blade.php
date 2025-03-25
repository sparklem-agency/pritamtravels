<div class="container mx-auto relative">
    <center>
        <x-ui.heading title="Trust Our Clients" subtitle="Testimonials" />
    </center>

    <img src="{{ url('/img/il/Graphic_Elements_testimonials.png') }}" alt="" srcset=""
        class="h-36 absolute top-16 z-10 left-0">

    <div class="p-10 ">



        <div class="bg-white shadow-2xl py-16 rounded-3xl relative">

            <div class="w-full flex items-center absolute top-1/2 bottom-1/2">

                <button type="button"
                    class="size-24 rounded-full border-primary grid place-items-center text-primary border bg-white -ml-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-10" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z">
                        </path>
                    </svg>
                </button>

                <button type="button"
                    class="size-24 rounded-full bg-primary grid place-items-center text-white ml-auto -mr-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-10" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z">
                        </path>
                    </svg>
                </button>


            </div>

            <div>
                <center class=" space-y-5">
                    <img src="{{ url('/img/avatar.png') }}" alt="" class=" h-28">

                    <h2 class="font-bold"> Irfan Rahmat</h2>

                    <span class=" text-gray-600">Travel Enthusiast</span>
                </center>

                <div class=" text-yellow-500 flex gap-2 items-center w-fit mx-auto">
                    @foreach (range(1, 4) as $item)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M23.9996 12.0235C17.5625 12.4117 12.4114 17.563 12.0232 24H11.9762C11.588 17.563 6.4369 12.4117 0 12.0235V11.9765C6.4369 11.5883 11.588 6.43719 11.9762 0H12.0232C12.4114 6.43719 17.5625 11.5883 23.9996 11.9765V12.0235Z">
                            </path>
                        </svg>
                    @endforeach
                </div>

                <center>
                    <p class="mt-5 text-gray-600">I love Pritam Travels, this is the best agency in entire northeast</p>
                </center>
            </div>
        </div>

        <div class="w-fit mx-auto flex items-center gap-3 mt-16">
            <div class="size-4 rounded-full bg-slate-200"></div>
            <div class="size-4 rounded-full bg-primary"></div>
            <div class="size-4 rounded-full bg-slate-200"></div>
        </div>
    </div>
</div>
