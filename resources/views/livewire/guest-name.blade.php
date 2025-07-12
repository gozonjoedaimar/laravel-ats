<div>
    {{-- The whole world belongs to you. --}}
    <input wire:model.debounce.500ms.live="guest_name" type="text" placeholder="Enter your name..." class="btn-default" />
    <p>Hello, {{ $guest_name ?: 'Guest' }}!</p>
    <div wire:loading>reading...</div>
</div>
