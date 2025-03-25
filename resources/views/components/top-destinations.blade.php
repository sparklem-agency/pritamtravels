<div class="container mx-auto">
    <div class="flex items-center gap-5">
        <x-ui.heading title="Explore top destinations" subtitle="top destinations" />

        <div class="ml-auto grid grid-cols-2 gap-5">

            <button type="button"
                class="border-primary rounded-full p-3 border-2 text-primary hover:scale-105 transition-all ease-in-out duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z">
                    </path>
                </svg>
            </button>

            <button type="button"
                class="bg-primary rounded-full p-3 border-2 text-white hover:scale-105 transition-all ease-in-out duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z">
                    </path>
                </svg>
            </button>
        </div>
    </div>


    <div class="grid lg:grid-cols-3 gap-5 grid-cols-1 mt-10">
        <x-cards.top-destination badge="Assam" :image="url('/img/destinations/kaziranga-national-park.png')" name="Kaziranga National Park" stars="4.6" />

        <x-cards.top-destination badge="Shillong" :image="url('/img/destinations/Elephant Falls, Shillong.png')" name="Elephant Falls, Shillong" stars="4.6" />

        <x-cards.top-destination badge="Nagaland" :image="url('/img/destinations/dzukou valley nagaland.png')" name="Dzukou valley nagaland" stars="4.6" />
    </div>

    <center>
        <a href="http://"
            class="flex items-center gap-2 w-fit mt-5 bg-slate-100 rounded-full p-3 font-bold text-primary">See All

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>

        </a>
    </center>
</div>
