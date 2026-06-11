<section id="testimonial" class="ap-section-gap" style="background: var(--bg-section-alt);">
    <div class="container">
        <div class="ap-section-title-wrap text-center">
            <h2 class="ap-section-title">
                <span>Testimonials</span>
                What People Say
            </h2>
            <p class="ap-section-desc" style="max-width: 500px; margin: 0 auto;">Trusted by clients worldwide for delivering exceptional results.</p>
        </div>
        <div class="ap-testimonials-grid">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="ap-testimonial-item">
                <div class="ap-testimonial-header">
                    <div class="ap-testimonial-avatar">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($testimonial->avatar): ?>
                        <img src="<?php echo e(Storage::url($testimonial->avatar)); ?>" alt="<?php echo e($testimonial->name); ?>">
                        <?php else: ?>
                        <div class="placeholder"><?php echo e(substr($testimonial->name, 0, 1)); ?></div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <div>
                        <h4 class="ap-testimonial-name"><?php echo e($testimonial->name); ?></h4>
                        <span class="ap-testimonial-role"><?php echo e($testimonial->position); ?><?php echo e($testimonial->company ? ', '.$testimonial->company : ''); ?></span>
                    </div>
                </div>
                <p class="ap-testimonial-text">"<?php echo e($testimonial->content); ?>"</p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\laravel-portfolio\resources\views/components/testimonials.blade.php ENDPATH**/ ?>