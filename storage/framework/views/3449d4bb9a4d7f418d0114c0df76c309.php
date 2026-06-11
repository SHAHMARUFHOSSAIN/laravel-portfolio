<section id="about" class="ap-doctor-about-area ap-section-gap">
    <div class="container">
        <div class="ap-doctor-about-grid">
            <div class="ap-doctor-about-thumb">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($profile?->photo): ?>
                <img src="<?php echo e(Storage::url($profile->photo)); ?>" alt="<?php echo e($profile->name); ?>">
                <?php else: ?>
                <div class="placeholder"><?php echo e(substr($profile?->name ?? 'A', 0, 1)); ?></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
            <div>
                <div class="ap-section-title-wrap" style="margin-bottom: 0;">
                    <h2 class="ap-section-title">
                        <span>About Me</span>
                        Turning Ideas into Digital Reality
                    </h2>
                </div>
                <p style="font-size: 15px; color: var(--text-body); line-height: 1.7; margin-top: 20px; margin-bottom: 20px;">
                    <?php echo $profile?->full_bio ?? "Since beginning my journey as a freelance designer nearly 8 years ago, I've done remote work for agencies, consulted for startups, and collaborated with talented people to create digital products for both business and consumer use."; ?>

                </p>
                <ul class="ap-about-list">
                    <li>
                        <span class="icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#19A2D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                        Web & Mobile App Development
                    </li>
                    <li>
                        <span class="icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#19A2D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                        UI/UX Design & Prototyping
                    </li>
                    <li>
                        <span class="icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#19A2D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                        API Development & Integration
                    </li>
                    <li>
                        <span class="icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#19A2D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                        Cloud Deployment & DevOps
                    </li>
                </ul>
                <a href="<?php echo e($profile?->resume_url ?? '#'); ?>" class="ap-btn-primary" <?php if($profile?->resume_url): ?> target="_blank" <?php endif; ?>>
                    Download Resume
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\laravel-portfolio\resources\views/components/about.blade.php ENDPATH**/ ?>