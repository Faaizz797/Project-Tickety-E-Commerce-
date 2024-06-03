@props([
    'isPopuler' => false,
    'cover',
    'title',
    'category',
    'date',
    'price',
    'description',
    'routes' => url('/'),
])


{{-- Card --}}
<div class="group rounded-2xl w-full overflow-hidden relative min-h-[297px] ">
    <!-- Popular badge -->
    @if ($isPopuler)
    <p class="px-[14px] py-2 rounded-xl bg-butter-yellow text-white font-semibold text-sm absolute top-5 right-5">
        Popular
    </p>
    @endif

    <img src="{{ $cover }}" class="w-full h-full max-h-[205px]" alt="tickety-assets">
    <div
        class="p-5 w-full bg-smoke-purple flex flex-col absolute h-full group-hover:-translate-y-[70%] transition ease-in-out duration-300">
        <div class="flex flex-wrap items-center justify-between gap-y-4">
            <div class="max-w-[180px]">
                <div class="text-xl font-semibold truncate">
                    {{ $title }}
                </div>
                <p class="text-butter-yellow text-sm mt-[6px]">
                    {{ $category }} • {{ $date }}
                </p>
            </div>
            <p class="text-xl font-semibold text-butter-yellow">
                Rp.{{ number_format($price) }}K
            </p>
        </div>
        <p
            class="mt-4 text-base leading-7 transition duration-300 ease-in-out opacity-0 text-white group-hover:opacity-100 line-clamp-3">
           Tunggu apa lagi?? Gasskan beli tiketnya!!
        </p>
        <div class="mt-auto transition duration-300 ease-in-out opacity-0 group-hover:opacity-100">
            <a href="{{ $routes }}" class="block text-white btn-secondary bg-secondary">
                View Details
            </a>
        </div>
    </div>
</div>
