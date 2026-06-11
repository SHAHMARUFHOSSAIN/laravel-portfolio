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
            @foreach($testimonials as $testimonial)
            <div class="ap-testimonial-item">
                <div class="ap-testimonial-header">
                    <div class="ap-testimonial-avatar">
                        @if($testimonial->avatar)
                        <img src="{{ Storage::url($testimonial->avatar) }}" alt="{{ $testimonial->name }}">
                        @else
                        <div class="placeholder">{{ substr($testimonial->name, 0, 1) }}</div>
                        @endif
                    </div>
                    <div>
                        <h4 class="ap-testimonial-name">{{ $testimonial->name }}</h4>
                        <span class="ap-testimonial-role">{{ $testimonial->position }}{{ $testimonial->company ? ', '.$testimonial->company : '' }}</span>
                    </div>
                </div>
                <p class="ap-testimonial-text">"{{ $testimonial->content }}"</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
