<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="background-image:url(assets/img/gallery/background.png);background-position:right top;background-size:contain;">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-4 py-8 bg-gray-100 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
