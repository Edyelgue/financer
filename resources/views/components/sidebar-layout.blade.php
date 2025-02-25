<div class="flex">
    <div class="w-1/4 bg-gray-800 text-white h-screen">
        <!-- Menu lateral -->
        <div class="p-4">
            <h2 class="text-lg font-semibold">{{ __('Menu') }}</h2>
            <ul>
                <li><a href="{{ route('dashboard') }}" class="block py-2">{{ __('Dashboard') }}</a></li>
                <!-- Adicione mais itens de menu conforme necessário -->
            </ul>
        </div>
    </div>
    <div class="w-3/4">
        {{ $slot }}
    </div>
</div>