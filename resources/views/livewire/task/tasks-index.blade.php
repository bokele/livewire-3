<div>
    <form method="POST" wire:submit='store'>
        @csrf

        <div>
            <x-label for="title" value="{{ __('Title') }}" />
            <x-input id="title" class="block mt-1 w-full" type="text" wire:model="title" :value="old('title')" required
                autofocus autocomplete="title" />
        </div>

        <div class="mt-4">
            <x-label for="slug" value="{{ __('Slug') }}" />
            <x-input id="slug" class="block mt-1 w-full" type="text" wire:model="slug" :value="old('slug')"
                required />
        </div>

        <div class="mt-4">
            <x-label for="description" value="{{ __('Description') }}" />
            <textarea id="description" class="block mt-1 w-full" wire:model="description" required></textarea>
        </div>
        <div class="mt-4">
            <x-label for="status" value="{{ __('Status') }}" />
            <select id="status" class="block mt-1 w-full" wire:model="status" required>
                @foreach (\App\Enums\StatusType::cases() as $status)
                    <option value="{{ $status->value }}">{{ $status->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-4">
            <x-label for="priority" value="{{ __('Priority') }}" />
            <select id="priority" class="block mt-1 w-full" wire:model="priority" required>
                @foreach (\App\Enums\PriorityType::cases() as $priority)
                    <option value="{{ $priority->value }}">{{ $priority->name }}</option>
                @endforeach
            </select>
        </div>


        <div class="mt-4">
            <x-label for="deadline" value="{{ __('Deadline') }}" />
            <x-input id="deadline" class="block mt-1 w-full" type="date" wire:model="deadline" :value="old('deadline')"
                required />
        </div>

        <div class="flex items-center justify-end mt-4">


            <x-button class="ms-4">
                {{ __('Submit') }}
            </x-button>
        </div>
    </form>
</div>
