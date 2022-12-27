<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANJAY</title>

    <style>
        .green {
            color: green;
        }
    </style>

    @livewireStyles
</head>

<body>
    <livewire:counter />
    @livewire('list.products', ['products' => $anjay])
    {{-- @foreach ($anjay as $key => $aaa)
         <livewire:card.products :hilih="$aaa" />
        <div :wire:key="card-{{ $key }}">
            @livewire('cards.products', ['hilih' => $aaa])
        </div>
    @endforeach --}}
    @livewireScripts
</body>

</html>
