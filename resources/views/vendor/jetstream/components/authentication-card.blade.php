<div class="flex min-h-screen flex-col items-center pt-6 sm:justify-center sm:pt-0">
    <div>
        {{ $logo }}
    </div>

    <div class="card mx-auto my-10 w-96 border border-secondary bg-neutral shadow-xl">
        <div class="card-body">

            {{ $slot }}
        </div>
    </div>
</div>
