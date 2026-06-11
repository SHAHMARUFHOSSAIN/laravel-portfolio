@if($projects->count() > 0)
<section id="portfolio" class="ap-section-gap" style="background: var(--bg-body);">
    <div class="container">
        <div class="ap-section-title-wrap text-center">
            <h2 class="ap-section-title">
                <span>Portfolio</span>
                Featured Works
            </h2>
            <p class="ap-section-desc" style="max-width: 500px; margin: 0 auto;">A showcase of my recent projects and digital creations.</p>
        </div>
        <div class="ap-portfolio-grid">
            @foreach($projects as $project)
            <div class="ap-portfolio-item">
                <div class="ap-portfolio-thumb">
                    @if($project->image)
                    <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}">
                    @else
                    <div class="placeholder">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#555" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                    </div>
                    @endif
                    <div class="ap-portfolio-overlay">
                        @if($project->live_url)
                        <a href="{{ $project->live_url }}" target="_blank" class="ap-portfolio-link" title="Live Preview">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                        </a>
                        @endif
                        @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank" class="ap-portfolio-link" title="Source Code">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                        </a>
                        @endif
                    </div>
                </div>
                <div class="ap-portfolio-info">
                    <div class="ap-portfolio-tags">
                        @foreach($project->technologies as $tech)
                        <span>{{ $tech->name }}</span>
                        @endforeach
                    </div>
                    <h3 class="ap-portfolio-title">{{ $project->title }}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
