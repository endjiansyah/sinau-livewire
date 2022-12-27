<div>
    {{-- The whole world belongs to you. --}}
    <form action="#" wire:submit.prevent="submit">
        <input type="text" name="name" placeholder="nama" wire:model="name">
        @error('name')
            <span class="error">{{ $message }}</span>
        @enderror
        <input type="email" name="email" placeholder="email" wire:model="email">
        @error('email')
            <span class="error">{{ $message }}</span>
        @enderror
        <input type="submit" value="Anjay">
    </form>

    <section x-data>
        <h1 x-text="$wire.count"></h1>
        <button x-on:click="$wire.increment()">Tambah 1</button>
    </section>
</div>
