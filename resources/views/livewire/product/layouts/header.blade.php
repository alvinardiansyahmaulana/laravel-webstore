<div class="flex justify-between">
    <div class="shrink-0 flex-item-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </div>

    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('dashboard.product.create')" :active="request()->routeIs('dashboard.product.create')">
            {{ __('Create') }}
        </x-nav-link>
    </div>
</div>