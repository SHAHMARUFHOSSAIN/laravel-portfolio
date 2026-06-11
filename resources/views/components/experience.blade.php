<section id="resume" class="ap-doctor-achievements-area ap-section-gap" style="background: var(--bg-body);">
    <div class="container">
        <div class="ap-section-title-wrap text-center">
            <h2 class="ap-section-title">
                <span>My Resume</span>
                Education & Experience
            </h2>
            <p class="ap-section-desc" style="max-width: 500px; margin: 0 auto;">A strong academic background and professional experience reflecting years of dedication.</p>
        </div>
        @if($experiences->count() > 0)
        <div class="ap-doctor-achievements-wrap">
            @foreach($experiences as $exp)
            <div class="ap-doctor-achievements-item">
                <div class="qualification-box">
                    <span class="subtitle">{{ $exp->start_date->format('Y') }} - {{ $exp->is_current ? 'Present' : $exp->end_date?->format('Y') }}</span>
                    <h3 class="title">{{ $exp->title }}</h3>
                </div>
                <div class="institute-box">
                    <h3 class="name">{{ $exp->company }}</h3>
                    @if($exp->description)
                    <p class="description">{{ $exp->description }}</p>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        @else
        <p style="text-align: center; color: var(--text-body); padding: 40px;">No experience added yet.</p>
        @endif
    </div>
</section>
