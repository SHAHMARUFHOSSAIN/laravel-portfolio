<section class="section-stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <span class="stat-number">{{ $experiences->count() }}+</span>
                <span class="stat-label">Years Experience</span>
            </div>
            <div class="stat-card">
                <span class="stat-number">{{ $projects->count() }}+</span>
                <span class="stat-label">Projects Done</span>
            </div>
            <div class="stat-card">
                <span class="stat-number">{{ $services->count() }}+</span>
                <span class="stat-label">Services</span>
            </div>
            <div class="stat-card">
                <span class="stat-number">{{ $testimonials->count() }}+</span>
                <span class="stat-label">Testimonials</span>
            </div>
        </div>
    </div>
</section>
