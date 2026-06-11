<section id="home" class="ap-doctor-banner-area">
    <div class="ap-doctor-banner-shape">
        <div class="ap-doctor-banner-shape-1"></div>
        <div class="ap-doctor-banner-shape-2"></div>
        <div class="ap-doctor-banner-shape-3"></div>
    </div>
    <div class="ap-doctor-banner-content">
        <div class="ap-doctor-banner-text">
            <span class="ap-doctor-banner-subtitle">Full Stack Developer</span>
            <h1>Hi, I'm <span><?php echo e($profile?->name ?? 'Alex'); ?></span></h1>
            <p class="ap-doctor-banner-subtitle ap-doctor-banner-subtitle-2"><?php echo e($profile?->title ?? 'Full Stack Developer & UI/UX Designer'); ?></p>
            <p class="ap-doctor-banner-intro"><?php echo e($profile?->short_bio ?? "I craft fast, accessible, and visually engaging digital experiences that blend clean code with thoughtful design."); ?></p>
            <div class="ap-doctor-banner-buttons">
                <a href="#portfolio" class="ap-btn-primary">
                    View Portfolio
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="#contact" class="ap-btn-outline">Contact Me</a>
            </div>
            <div class="ap-doctor-banner-stats">
                <div>
                    <span class="ap-doctor-banner-stat-value"><?php echo e($experiences->count()); ?>+</span>
                    <span class="ap-doctor-banner-stat-label">Years Experience</span>
                </div>
                <div>
                    <span class="ap-doctor-banner-stat-value"><?php echo e($projects->count()); ?>+</span>
                    <span class="ap-doctor-banner-stat-label">Projects Done</span>
                </div>
                <div>
                    <span class="ap-doctor-banner-stat-value"><?php echo e($services->count()); ?>+</span>
                    <span class="ap-doctor-banner-stat-label">Services</span>
                </div>
            </div>
        </div>
        <div class="ap-doctor-banner-thumb">
            <div class="thumb-wrapper">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($profile?->photo): ?>
                <img src="<?php echo e(Storage::url($profile->photo)); ?>" alt="<?php echo e($profile->name); ?>">
                <?php else: ?>
                <div class="placeholder"><?php echo e(substr($profile?->name ?? 'A', 0, 1)); ?></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <div class="ap-doctor-banner-info-card ap-doctor-banner-info-card-1">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#19A2D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                    <span><?php echo e($projects->count()); ?>+ Projects</span>
                </div>
                <div class="ap-doctor-banner-info-card ap-doctor-banner-info-card-2">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#19A2D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    <span><?php echo e($experiences->count()); ?>+ Years Exp.</span>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\laravel-portfolio\resources\views/components/hero.blade.php ENDPATH**/ ?>