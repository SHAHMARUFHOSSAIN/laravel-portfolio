<section id="resume" class="ap-doctor-achievements-area ap-section-gap" style="background: var(--bg-body);">
    <div class="container">
        <div class="ap-section-title-wrap text-center">
            <h2 class="ap-section-title">
                <span>My Resume</span>
                Education & Experience
            </h2>
            <p class="ap-section-desc" style="max-width: 500px; margin: 0 auto;">A strong academic background and professional experience reflecting years of dedication.</p>
        </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($experiences->count() > 0): ?>
        <div class="ap-doctor-achievements-wrap">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="ap-doctor-achievements-item">
                <div class="qualification-box">
                    <span class="subtitle"><?php echo e($exp->start_date->format('Y')); ?> - <?php echo e($exp->is_current ? 'Present' : $exp->end_date?->format('Y')); ?></span>
                    <h3 class="title"><?php echo e($exp->title); ?></h3>
                </div>
                <div class="institute-box">
                    <h3 class="name"><?php echo e($exp->company); ?></h3>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($exp->description): ?>
                    <p class="description"><?php echo e($exp->description); ?></p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
        <?php else: ?>
        <p style="text-align: center; color: var(--text-body); padding: 40px;">No experience added yet.</p>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\laravel-portfolio\resources\views/components/experience.blade.php ENDPATH**/ ?>