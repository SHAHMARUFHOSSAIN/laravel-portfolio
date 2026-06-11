@if($services->count() > 0)
<section id="services" class="ap-service-area ap-section-gap" style="background: var(--bg-section-alt);">
    <div class="container">
        <div class="ap-section-title-wrap text-center">
            <h2 class="ap-section-title">
                <span>What I Do</span>
                Expert Solutions
            </h2>
            <p class="ap-section-desc" style="max-width: 600px; margin: 0 auto;">Delivering high-quality digital solutions with precision and experience.</p>
        </div>
    </div>
    <div class="ap-treatments-wrapper">
        @foreach($services as $service)
        <div class="ap-treatments-item">
            <div class="ap-treatments-thumb">
                @if($service->image)
                <img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}">
                @else
                <div class="icon-placeholder">
                    @if($service->icon)
                    <img src="{{ Storage::url($service->icon) }}" alt="{{ $service->title }}" style="width: 48px; height: 48px; object-fit: contain;">
                    @else
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#19A2D0" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                    @endif
                </div>
                @endif
            </div>
            <div class="ap-treatments-content">
                <h3 class="ap-treatments-title">{{ $service->title }}</h3>
                <p class="ap-treatments-desc">{{ $service->description }}</p>
                <span class="ap-treatments-count">{{ $projects->count() }} Projects</span>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endif
