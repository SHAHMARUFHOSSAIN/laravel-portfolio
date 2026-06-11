<div class="dashboard-wrapper">
    <div class="dashboard-container">
        <div class="dashboard-header">
            <h1 class="dashboard-title">Welcome to Admin Dashboard</h1>
            <p class="dashboard-subtitle">Manage your portfolio content</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card stat-projects">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
                <div class="stat-content">
                    <span class="stat-number"><?php echo e($totalProjects); ?></span>
                    <span class="stat-label">Projects</span>
                </div>
            </div>

            <div class="stat-card stat-skills">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div class="stat-content">
                    <span class="stat-number"><?php echo e($totalSkills); ?></span>
                    <span class="stat-label">Skills</span>
                </div>
            </div>

            <div class="stat-card stat-experience">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="stat-content">
                    <span class="stat-number"><?php echo e($totalExperiences); ?></span>
                    <span class="stat-label">Experience</span>
                </div>
            </div>

            <div class="stat-card stat-services">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.16.724 2.846 2.246A2.214 2.214 0 0113.752 8c-.47 0-.922.126-1.325.354a2.214 2.214 0 01-2.475 1.155c-1.022.37-2.277-.614-2.246-2.246a1.724 1.724 0 001.066-2.573c-1.756.426-1.756 2.924 0 3.35a1.724 1.724 0 001.066 2.573c1.543-.94 3.16.724 2.846 2.246" />
                    </svg>
                </div>
                <div class="stat-content">
                    <span class="stat-number"><?php echo e($totalServices); ?></span>
                    <span class="stat-label">Services</span>
                </div>
            </div>

            <div class="stat-card stat-testimonials">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                </div>
                <div class="stat-content">
                    <span class="stat-number"><?php echo e($totalTestimonials); ?></span>
                    <span class="stat-label">Testimonials</span>
                </div>
            </div>

            <div class="stat-card stat-messages">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <div class="stat-content">
                    <span class="stat-number"><?php echo e($totalContacts); ?></span>
                    <span class="stat-label">Messages</span>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($unreadContacts > 0): ?>
                        <span class="stat-badge"><?php echo e($unreadContacts); ?> new</span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </div>

        <div class="quick-links">
            <h2 class="section-title">Quick Actions</h2>
            <div class="links-grid">
                <a href="<?php echo e(url('/admin/projects')); ?>" class="quick-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                    <span>Add Project</span>
                </a>
                <a href="<?php echo e(url('/admin/skills')); ?>" class="quick-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                    <span>Add Skill</span>
                </a>
                <a href="<?php echo e(url('/admin/experiences')); ?>" class="quick-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                    <span>Add Experience</span>
                </a>
                <a href="<?php echo e(url('/admin/services')); ?>" class="quick-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                    <span>Add Service</span>
                </a>
                <a href="<?php echo e(url('/admin/testimonials')); ?>" class="quick-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                    <span>Add Testimonial</span>
                </a>
                <a href="<?php echo e(url('/admin/contacts')); ?>" class="quick-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                    <span>View Messages</span>
                </a>
                <a href="<?php echo e(url('/admin/profiles')); ?>" class="quick-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                    <span>Edit Profile</span>
                </a>
                <a href="<?php echo e(url('/')); ?>" target="_blank" class="quick-link quick-link-view">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                    <span>View Website</span>
                </a>
            </div>
        </div>
    </div>

    <style>.dashboard-wrapper{padding:24px;max-width:1400px;margin:0 auto}.dashboard-header{margin-bottom:40px}.dashboard-title{font-size:32px;font-weight:700;color:#fff;margin-bottom:8px}.dashboard-subtitle{font-size:16px;color:rgba(255,255,255,0.6)}.stats-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px;margin-bottom:48px}.stat-card{display:flex;align-items:center;gap:20px;padding:24px;background:rgba(10,30,50,0.8);border:2px solid rgba(56,189,248,0.3);border-radius:16px;transition:all 0.3s ease}.stat-card:hover{transform:translateY(-4px);border-color:#38bdf8;box-shadow:0 10px 30px rgba(56,189,248,0.2)}.stat-icon{width:60px;height:60px;display:flex;align-items:center;justify-content:center;background:rgba(56,189,248,0.15);border-radius:12px;color:#38bdf8}.stat-projects .stat-icon{background:rgba(59,130,246,0.15);color:#3b82f6}.stat-projects:hover{border-color:#3b82f6;box-shadow:0 10px 30px rgba(59,130,246,0.2)}.stat-skills .stat-icon{background:rgba(34,197,94,0.15);color:#22c55e}.stat-skills:hover{border-color:#22c55e;box-shadow:0 10px 30px rgba(34,197,94,0.2)}.stat-experience .stat-icon{background:rgba(245,158,11,0.15);color:#f59e0b}.stat-experience:hover{border-color:#f59e0b;box-shadow:0 10px 30px rgba(245,158,11,0.2)}.stat-services .stat-icon{background:rgba(168,85,247,0.15);color:#a855f7}.stat-services:hover{border-color:#a855f7;box-shadow:0 10px 30px rgba(168,85,247,0.2)}.stat-testimonials .stat-icon{background:rgba(236,72,153,0.15);color:#ec4899}.stat-testimonials:hover{border-color:#ec4899;box-shadow:0 10px 30px rgba(236,72,153,0.2)}.stat-messages .stat-icon{background:rgba(239,68,68,0.15);color:#ef4444}.stat-messages:hover{border-color:#ef4444;box-shadow:0 10px 30px rgba(239,68,68,0.2)}.stat-content{display:flex;flex-direction:column}.stat-number{font-size:36px;font-weight:700;color:#fff;line-height:1}.stat-label{font-size:14px;color:rgba(255,255,255,0.6);margin-top:4px}.stat-badge{display:inline-block;margin-top:8px;padding:4px 10px;background:rgba(239,68,68,0.2);border:1px solid rgba(239,68,68,0.4);border-radius:20px;font-size:12px;color:#ef4444}.section-title{font-size:20px;font-weight:600;color:#fff;margin-bottom:20px}.quick-links{background:rgba(10,30,50,0.6);border:1px solid rgba(56,189,248,0.2);border-radius:16px;padding:24px}.links-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px}.quick-link{display:flex;align-items:center;gap:12px;padding:16px 20px;background:rgba(56,189,248,0.05);border:1px solid rgba(56,189,248,0.2);border-radius:12px;color:rgba(255,255,255,0.8);text-decoration:none;font-weight:500;transition:all 0.3s ease}.quick-link:hover{background:rgba(56,189,248,0.15);border-color:#38bdf8;color:#38bdf8;transform:translateX(4px)}.quick-link-view{background:rgba(34,197,94,0.05);border-color:rgba(34,197,94,0.2)}.quick-link-view:hover{background:rgba(34,197,94,0.15);border-color:#22c55e;color:#22c55e}@media (max-width:768px){.stats-grid,.links-grid{grid-template-columns:1fr}}</style>
</div><?php /**PATH C:\xampp\htdocs\laravel-portfolio\resources\views/filament/pages/dashboard.blade.php ENDPATH**/ ?>