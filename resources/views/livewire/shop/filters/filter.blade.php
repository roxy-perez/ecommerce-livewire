<x-card-filter :title="$title">
    <ul class="w-96 dark:text-white text-surface">
        @foreach ($models as $model)
            <li wire:key="{{ $alias }}-filter-{{ $model->id }} "
                class="py-4 w-full border-b-2 border-neutral-100 dark:border-white/10">
                <input class="me-1" type="checkbox" value="{{ $model->id }}"
                    id="{{ $alias }}-filter-{{ $model->id }}" wire:model.live="selectedModels" />
                <label for="{{ $alias }}-filter-{{ $model->id }}">{{ $model->name }}</label>
                <span
                    class="px-2.5 py-0.5 text-xs font-medium text-blue-800 bg-blue-100 rounded-full float-end me-2 dark:bg-blue-900 dark:text-blue-300">{{ $model->products()->count() }}</span>
            </li>
        @endforeach
    </ul>
</x-card-filter>
