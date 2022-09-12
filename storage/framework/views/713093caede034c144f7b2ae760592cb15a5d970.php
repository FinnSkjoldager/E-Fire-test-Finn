<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <?php if($isOpen): ?>
                <?php echo $__env->make('livewire.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Body</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $personer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="border px-4 py-2"><?php echo e($post->id); ?></td>
                        <td class="border px-4 py-2"><?php echo e($post->navn); ?></td>
                        <td class="border px-4 py-2"><?php echo e($post->navn); ?></td>
                        <td class="border px-4 py-2">
                        <button wire:click="skolist(<?php echo e($post->id); ?>)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button wire:click="delete(<?php echo e($post->id); ?>)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH D:\E-Fire-test-Finn-1\resources\views/livewire/posts.blade.php ENDPATH**/ ?>