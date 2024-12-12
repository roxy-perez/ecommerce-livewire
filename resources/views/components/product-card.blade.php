<div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-600">
    <a href="#">
        <img class="rounded-t-lg" src="{{ $product->image }}" alt="{{ $product->name }}" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->name }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
            acquisitions of 2021 so far, in reverse chronological order.</p>
        <!-- category, color, size, brand, price -->
        <ul class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            <li>
                <div class="flex items-center mb-4">
                    <div class="font-bold text-gray-900 dark:text-white">{{ __('Categoría') }}:</div>
                    <div class="ml-4">{{ $product->category->name }} </div>
                </div>
            </li>
            <li>
                <div class="flex items-center mb-4">
                    <div class="font-bold text-gray-900 dark:text-white">{{ __('Color') }}:</div>
                    <div class="ml-4">{{ $product->color->name }} </div>
                </div>
            </li>
            <li>
                <div class="flex items-center mb-4">
                    <div class="font-bold text-gray-900 dark:text-white">{{ __('Talla') }}:</div>
                    <div class="ml-4">{{ $product->size->name }} </div>
                </div>
            </li>
            <li>
                <div class="flex items-center mb-4">
                    <div class="font-bold text-gray-900 dark:text-white">{{ __('Marca') }}:</div>
                    <div class="ml-4">{{ $product->brand->name }} </div>
                </div>
            </li>
            <li>
                <div class="flex items-center mb-4">
                    <div class="font-bold text-gray-900 dark:text-white">{{ __('Precio') }}:</div>
                    <div class="ml-4">{{ $product->price }} </div>
                </div>
            </li>
        </ul>
    </div>

    <!-- rating -->
    <div class="p-4 bg-gray-500 rounded-b-lg">
        <div class="flex justify-between items-center">
            <div class="text-lg font-bold text-white">{{ __('Valoración') }}</div>
            <div class="flex">
                @for ($i = 1; $i <= 5; $i++)
                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="{{ $i <= $product->reviews->avg('rating') ? 'currentColor' : 'none' }}"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-6 h-6 {{ $i <= $product->reviews->avg('rating') ? 'text-yellow-500' : 'text-gray-300' }}">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                @endfor
            </div>
        </div>
    </div>




</div>
