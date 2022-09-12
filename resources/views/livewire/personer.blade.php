<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4" style="background-color:rgb(234, 243, 247);">
        @if($isOpen)
                @include('livewire.skolist')
        @endif
        <div style="margin:20px;">
                <img src="{{ url(asset('succes.png')) }}" width=40px/>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Løsning på Basic Screening Test.
                </h2>
                <i>Udført af Finn Skjoldager</i>
        </div>
            <table class="table-fixed w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 w-10">Id</th>
                        <th class="px-4 py-2">Navn</th>
                        <th class="px-4 py-2">Adresse</th>
                        <th class="px-4 py-2">Telefon nr.</th>
                        <th class="px-4 py-2">Antal sko</th>
                        <th class="px-4 py-2"></th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($personer as $person)
                    <tr>
                        <td class="border px-4 py-2">{{ $person->id }}</td>
                        <td class="border px-4 py-2">{{ $person->navn }}</td>
                        <td class="border px-4 py-2">{{ $person->adresse }}</td>
                        <td class="border px-4 py-2">{{ $person->telesonnr }}</td>
                        <td class="border px-4 py-2">{{ count($person->personsko) }}</td>
                        <td class="border px-4 py-2">
                        <button wire:click="skolist({{ $person->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Vis sko</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>