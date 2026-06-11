@if($skills->count() > 0)
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
            @foreach($skills as $skill)
            <div class="ap-skill-item">
                <div class="ap-skill-header">
                    @if($skill->icon)
                    <div class="ap-skill-icon">
                        <img src="{{ Storage::url($skill->icon) }}" alt="{{ $skill->name }}">
                    </div>
                    @endif
                    <span class="ap-skill-name">{{ $skill->name }}</span>
                    <span class="ap-skill-percentage">{{ $skill->percentage }}%</span>
                </div>
                <div class="ap-skill-bar">
                    <div class="ap-skill-progress" style="width: {{ $skill->percentage }}%"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
