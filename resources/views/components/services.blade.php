<div class="container mx-auto grid grid-cols-2 gap-5 relative">

    <div class=" bg-purple-300 blur-3xl rounded-full size-[400px] absolute -top-0 left-20"></div>
    <div class="static z-10">
        <x-ui.heading title="We offer Best services" subtitle="Services" />
        <div class="text-gray-600 text-sm mt-5" data-animate="fadeRight">
            <p>Hey, Travelers! We're here to help you plan your dream holiday.  Simply choose your destination, and let
                us
                take care of the rest!</p>
        </div>

        <div class=" mt-5 p-8">

            <div data-animate="fadeUp" data-animate-delay="300"
                class="flex flex-row gap-5 items-center hover:bg-white rounded-xl hover:shadow-2xl  duration-1000 transition-all ease-in-out p-5 py-8 ">
                <div class="bg-primary text-white p-3 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 15C14.2091 15 16 13.2091 16 11C16 8.79086 14.2091 7 12 7C9.79086 7 8 8.79086 8 11C8 13.2091 9.79086 15 12 15ZM12 13C10.8954 13 10 12.1046 10 11C10 9.89543 10.8954 9 12 9C13.1046 9 14 9.89543 14 11C14 12.1046 13.1046 13 12 13Z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg font-bold">Select many location</h2>
                    <p class="text-sm">Choose you favorate location</p>
                </div>
            </div>

            <div data-animate="fadeUp" data-animate-delay="600"
                class="flex flex-row gap-5 items-center hover:bg-white rounded-xl hover:shadow-2xl  duration-1000 transition-all ease-in-out p-5 py-8">
                <div class="bg-[#FF8126] text-white p-3 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M2 11H22V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V11ZM17 3H21C21.5523 3 22 3.44772 22 4V9H2V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3Z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg font-bold">Schedule your trip</h2>
                    <p class="text-sm">Set the date you want</p>
                </div>
            </div>

            <div data-animate="fadeUp" data-animate-delay="1000"
                class="flex flex-row gap-5 items-center hover:bg-white rounded-xl hover:shadow-2xl  duration-1000 transition-all ease-in-out p-5 py-8">
                <div class="bg-[#F411CF] text-white p-3 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 15C14.2091 15 16 13.2091 16 11C16 8.79086 14.2091 7 12 7C9.79086 7 8 8.79086 8 11C8 13.2091 9.79086 15 12 15ZM12 13C10.8954 13 10 12.1046 10 11C10 9.89543 10.8954 9 12 9C13.1046 9 14 9.89543 14 11C14 12.1046 13.1046 13 12 13Z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg font-bold">Big discount</h2>
                    <p class="text-sm">Get discount for every services</p>
                </div>
            </div>
        </div>
    </div>

    <div>
        <img src="{{ url('/img/services-image.png') }}" alt="" data-animate="fadeRight"
            data-animate-delay="800">
    </div>
</div>
