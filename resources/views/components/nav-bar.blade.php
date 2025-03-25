<div class="container mx-auto relative backdrop-blur-3xl">
    <!-- Blurred Background Circle -->
    <div class="bg-[var(--secondary)] size-[500px] rounded-full absolute -top-[250px] -left-[250px] opacity-30 blur-3xl">
    </div>

    <nav class="grid grid-flow-col gap-5 relative z-10">
        <div>
            <img src="{{ url('/logo.png') }}" alt="" class="h-32" data-animate="fadeRight">
        </div>
        <div class="flex items-center justify-center">
            <ul class="flex items-center gap-5">
                <li data-animate="fadeRight" data-animate-delay="300"><a href="http://">Home</a></li>
                <li data-animate="fadeRight" data-animate-delay="400"><a href="http://">About</a></li>
                <li data-animate="fadeRight" data-animate-delay="500"><a href="http://">Packages</a></li>
                <li data-animate="fadeRight" data-animate-delay="600"><a href="http://">Car rental</a></li>
                <li data-animate="fadeRight" data-animate-delay="700"><a href="http://">Gallery</a></li>
            </ul>
        </div>
        <div class="flex items-center">
            <x-ui.button class="ml-auto" data-animate="fadeLeft">Contact Us</x-ui.button>
        </div>
    </nav>
</div>
