<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4" style="background-color:rgb(234, 243, 247);">
        <?php if($isOpen): ?>
                <?php echo $__env->make('livewire.skolist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <div style="margin:20px;">
                <img src="<?php echo e(url(asset('succes.png'))); ?>" width=40px/>
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
                     <?php $__currentLoopData = $personer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="border px-4 py-2"><?php echo e($person->id); ?></td>
                        <td class="border px-4 py-2"><?php echo e($person->navn); ?></td>
                        <td class="border px-4 py-2"><?php echo e($person->adresse); ?></td>
                        <td class="border px-4 py-2"><?php echo e($person->telesonnr); ?></td>
                        <td class="border px-4 py-2"><?php echo e(count($person->personsko)); ?></td>
                        <td class="border px-4 py-2">
                        <button wire:click="skolist(<?php echo e($person->id); ?>)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Vis sko</button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
    </div>
</div><?php /**PATH D:\E-Fire-test-Finn-1\resources\views/livewire/personer.blade.php ENDPATH**/ ?>