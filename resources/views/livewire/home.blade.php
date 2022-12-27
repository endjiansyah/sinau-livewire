<div>
    <h2>HUANJAY</h2>
    {{-- @livewire('list.products', ['products' => $anjay]) --}}

    @livewire('form.contact')

    <button wire:click="clicked" wire:loading.attr="disabled">Dih</button>

    <div wire:loading>Now Loading . . .</div>
</div>
