<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex btn btn-base items-center px-4 py-2 hover:bg-primary border border-transparent rounded-full font-semibold text-white uppercase tracking-widest bg-gray-700 focus:outline-none focus:ring focus:ring-primary disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
