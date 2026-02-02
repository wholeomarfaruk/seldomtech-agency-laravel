
<div class="mt-2" wire:ignore>
    <div
        x-data="{
            value: @entangle($attributes->wire('model')),
            isFocused: false
        }"
        x-init="
            $refs.trix.editor.loadHTML(value);
            // Update Livewire when Trix changes
            $refs.trix.addEventListener('trix-change', () => {
                value = $refs.trix.value;
            });
        "
        {{-- Update Trix if Livewire value changes externally --}}
        x-on:trix-value-updated.window="if (!isFocused) $refs.trix.editor.loadHTML(value)"
    >
        <input id="trix_input" type="hidden" name="content">
        <trix-editor
            x-ref="trix"
            input="trix_input"
            x-on:trix-focus="isFocused = true"
            x-on:trix-blur="isFocused = false"
            class="prose max-w-none bg-white shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-600"
        ></trix-editor>
    </div>
</div>
