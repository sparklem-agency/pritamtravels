<div class="container mx-auto">
    <x-ui.heading title="We have the best car collection" subtitle="Car rental" class="text-center" />
    <div class=" grid grid-cols-4 gap-5 mt-10" data-animate="fadeUp" data-animate-delay="800">
        @foreach (range(1, 4) as $item)
            <x-cards.car :imageSrc="url('/img/cars/innova-crytsa.png')" name="Innova Crysta"
                description="2.4L Diesel MT, 7-Seater MPV, 148 BHP RWD, 12.99 kmpl" mileage="12.99 kmpl" fueltype="diesel"
                geartype="mannual" />
        @endforeach
    </div>
</div>
