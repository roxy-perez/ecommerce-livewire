<div class="flex flex-wrap justify-center items-center py-4 md:py-8">
    <button type="button"
        class="px-5 py-2.5 mb-3 text-base font-medium text-center text-blue-700 bg-white rounded-full border border-blue-600 hover:text-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 me-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">
        @livewire('shop.filters.category-filter')
    </button>
    <button type="button"
        class="px-5 py-2.5 mb-3 text-base font-medium text-center text-gray-900 bg-white rounded-full border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 me-3 dark:text-white dark:focus:ring-gray-800">
        @livewire('shop.filters.price-filter')
    </button>
    <button type="button"
        class="px-5 py-2.5 mb-3 text-base font-medium text-center text-gray-900 bg-white rounded-full border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 me-3 dark:text-white dark:focus:ring-gray-800">
        @livewire('shop.filters.color-filter')</button>
    <button type="button"
        class="px-5 py-2.5 mb-3 text-base font-medium text-center text-gray-900 bg-white rounded-full border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 me-3 dark:text-white dark:focus:ring-gray-800">
        @livewire('shop.filters.size-filter')
    </button>
    <button type="button"
        class="px-5 py-2.5 mb-3 text-base font-medium text-center text-gray-900 bg-white rounded-full border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 me-3 dark:text-white dark:focus:ring-gray-800">
        @livewire('shop.filters.brand-filter')
    </button>
    <button type="button"
        class="px-5 py-2.5 mb-3 text-base font-medium text-center text-gray-900 bg-white rounded-full border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 me-3 dark:text-white dark:focus:ring-gray-800">
        @livewire('shop.filters.rating-filter')
    </button>

    <button type="button" wire:click="resetFilters"
        class="px-2 py-2 mb-2 text-sm font-medium text-center text-white bg-red-700 rounded-full hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
        </svg>
    </button>

    <!-- Products -->
    <div class="flex flex-col justify-center items-center py-4 w-full md:py-8">

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            @livewire('shop.filters.per-page-filter')
        </div>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            @livewire('shop.filters.search-filter')
        </div>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <div class="flex flex-col justify-center items-center py-4 md:py-8">
                <x-product-card :product="$product" />
            </div>
            <div class="flex flex-col justify-center items-center py-4 md:py-8">
                @livewire('shop.lists.products-list')
            </div>
        </div>
    </div>
</div>
