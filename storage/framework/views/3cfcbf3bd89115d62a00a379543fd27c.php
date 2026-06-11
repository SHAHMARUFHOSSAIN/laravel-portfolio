<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($skills->count() > 0): ?>
<section id="skills" class="ap-section-gap" style="background: var(--bg-section-alt);">
    <div class="container">
        <div class="ap-section-title-wrap text-center">
            <h2 class="ap-section-title">
                <span>My Skills</span>
                Technologies & Expertise
            </h2>
            <p class="ap-section-desc" style="max-width: 500px; margin: 0 auto;">Proficient in modern technologies to deliver cutting-edge solutions.</p>
        </div>
        <div class="ap-skills-grid">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="ap-skill-item">
                <div class="ap-skill-header">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($skill->icon): ?>
                    <div class="ap-skill-icon">
                        <img src="<?php echo e(Storage::url($skill->icon)); ?>" alt="<?php echo e($skill->name); ?>">
                    </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <span class="ap-skill-name"><?php echo e($skill->name); ?></span>
                    <span class="ap-skill-percentage"><?php echo e($skill->percentage); ?>%</span>
                </div>
                <div class="ap-skill-bar">
                    <div class="ap-skill-progress" style="width: <?php echo e($skill->percentage); ?>%"></div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laravel-portfolio\resources\views/components/skills.blade.php ENDPATH**/ ?>