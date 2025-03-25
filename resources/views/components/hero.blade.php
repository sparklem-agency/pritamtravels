<div class="grid grid-cols-2 gap-10 container mx-auto  min-h-64">

    <div class=" space-y-10">
        <x-ui.button
            class="flex items-center gap-2 whitespace-nowrap text-secondary bg-white px-6 py-3 rounded-full shadow-lg w-fit relative mt-20">
            <span class="whitespace-nowrap">Explore NE</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path
                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM16.5 7.5L10 10L7.5 16.5L14 14L16.5 7.5ZM12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11 12.5523 11.4477 11 12 11C12.5523 11 13 11.4477 13 12C13 12.5523 12.5523 13 12 13Z">
                </path>
            </svg>
        </x-ui.button>



        <h1 class=" text-7xl font-medium leading-none">
            Experience <br />
            The Beauty Of <span class="text-secondary ">
                Northeast <br /> India.
            </span>
        </h1>

        <p class="text-gray-600">
            Discover the Untamed Beauty and Rich Culture of Northeast India.
        </p>

        <div class=" flex flex-wrap gap-2 items-center">
            <x-ui.button>Book Now</x-ui.button>

            <button class="btn-primary bg-white border-2  text-black border-[var(--secondary)]">
                <span class="text-secondary">Glipmse</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary size-6" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM10.6219 8.41459C10.5562 8.37078 10.479 8.34741 10.4 8.34741C10.1791 8.34741 10 8.52649 10 8.74741V15.2526C10 15.3316 10.0234 15.4088 10.0672 15.4745C10.1897 15.6583 10.4381 15.708 10.6219 15.5854L15.5008 12.3328C15.5447 12.3035 15.5824 12.2658 15.6117 12.2219C15.7343 12.0381 15.6846 11.7897 15.5008 11.6672L10.6219 8.41459Z">
                    </path>
                </svg>
            </button>
        </div>

    </div>

    <div>
        <div class="relative">

            <img src="{{ asset('/img/hero/plane-1.svg') }}" alt="" class="absolute top-8 left-10">
            <img src="{{ asset('/img/hero/plane-2.svg') }}" alt="" class="absolute top-56 -right-[30px]">

            <button type="button"
                class="bg-[#FACD49] size-10 grid place-items-center rounded-full text-white shadow-md -rotate-90 absolute  right-64 top-20">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path
                        d="M1.94607 9.31543C1.42353 9.14125 1.4194 8.86022 1.95682 8.68108L21.043 2.31901C21.5715 2.14285 21.8746 2.43866 21.7265 2.95694L16.2733 22.0432C16.1223 22.5716 15.8177 22.59 15.5944 22.0876L11.9999 14L17.9999 6.00005L9.99992 12L1.94607 9.31543Z">
                    </path>
                </svg>
            </button>



            <div class=" columns-2 space-y-5 relative z-10 p-32">

                <img src="{{ asset('/img/hero/1.png') }}" alt=""
                    class="hover:scale-105 transition-all ease-in-out duration-300 hover:rotate-1">

                <img src="{{ asset('/img/hero/2.png') }}" alt=""
                    class="hover:scale-105 transition-all ease-in-out duration-300 hover:rotate-1">

                <img src="{{ asset('/img/hero/3.png') }}" alt=""
                    class="hover:scale-105 transition-all ease-in-out duration-300 hover:rotate-1">

                <img src="{{ asset('/img/hero/4.png') }}" alt=""
                    class="hover:scale-105 transition-all ease-in-out duration-300 hover:rotate-1">
            </div>

            <center class="-mt-16 p-3">
                <button type="button" class="bg-blue-700 text-white rounded-full p-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 15C14.2091 15 16 13.2091 16 11C16 8.79086 14.2091 7 12 7C9.79086 7 8 8.79086 8 11C8 13.2091 9.79086 15 12 15ZM12 13C10.8954 13 10 12.1046 10 11C10 9.89543 10.8954 9 12 9C13.1046 9 14 9.89543 14 11C14 12.1046 13.1046 13 12 13Z">
                        </path>
                    </svg>
                </button>
            </center>
        </div>
    </div>

</div>
