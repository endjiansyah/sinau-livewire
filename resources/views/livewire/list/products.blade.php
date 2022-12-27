<div>
    @foreach ($products as $key => $aaa)
        {{-- <livewire:card.products :hilih="$aaa" /> --}}
        <div :wire:key="card-{{ $key }}">
            {{-- @livewire('nama component',[array of parameters]) --}}
            @livewire('cards.products', ['hilih' => $aaa])
        </div>
    @endforeach
</div>
