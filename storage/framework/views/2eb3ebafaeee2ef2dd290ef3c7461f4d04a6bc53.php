<div class="container">
<div>
    LISTE MED PERSONER
</div>
<div>
<table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">Id</th>
                        <th class="px-4 py-2">Navn</th>
                        <th class="px-4 py-2">Adresse</th>
                        <th class="px-4 py-2">Telefon nr.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $persons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="border px-4 py-2"><?php echo e($person->id); ?></td>
                        <td class="border px-4 py-2"><?php echo e($person->navn); ?></td>
                        <td class="border px-4 py-2"><?php echo e($person->adresse); ?></td>
                        <td class="border px-4 py-2"><?php echo e($person->telesonnr); ?></td>
                        <td class="border px-4 py-2">
                        <button wire:click="edit(<?php echo e($person->id); ?>)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button wire:click="delete(<?php echo e($person->id); ?>)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
</div>
</div><?php /**PATH D:\E-Fire-test-Finn-1\resources\views/livewire/persons.blade.php ENDPATH**/ ?>