<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
  
    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
  
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <form>
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
      <style>
        td{
          padding:0px;
          margin:0px;
        }
      </style>
      <table class="table-fixed w-full" style="font-size:10pt;">
                <thead>
                    <tr>
                        <th class="w-10">Id</th>
                        <th class="w-35">Beskrivelse</th>
                        <th class="">Størrelse</th>
                        <th class="">Farve</th>
                        <th class="w-10">Pris</th>
                        <th class="w-15">Antal på lager</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($person->personsko as $sko)
                    <tr>
                        <td class="border">{{ $sko->id }}</td>
                        <td class="border">{{ $sko->beskrivelse }}</td>
                        <td class="border">{{ $sko->storrelse }}</td>
                        <td class="border">{{ $sko->farve }}</td>
                        <td class="border">{{ $sko->pris }}</td>
                        <td class="border">{{ $sko->antal }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
      </div>
      <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full bg-blue-500 hover:bg-blue-700 
      text-white font-bold py-2 px-4 rounded my-3">
        Luk vindue
      </button> 

    </div>
  </div>
</div>