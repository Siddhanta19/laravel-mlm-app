<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-primary rounded-md font-semibold text-xs uppercase tracking-widest btn-primary disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
