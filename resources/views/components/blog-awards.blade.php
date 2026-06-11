<section id="blog" class="ap-section-gap" style="background: var(--bg-section-alt);">
    <div class="container">
        <div class="ap-section-title-wrap text-center">
            <h2 class="ap-section-title">
                <span>Blog & Awards</span>
                Latest Articles & Achievements
            </h2>
            <p class="ap-section-desc" style="max-width: 500px; margin: 0 auto;">Thoughts, tutorials, and recognitions from my journey.</p>
        </div>

        <div class="ap-blog-tabs">
            <button class="ap-blog-tab active" data-tab="blog" onclick="switchBlogTab('blog')">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                Blog
            </button>
            <button class="ap-blog-tab" data-tab="award" onclick="switchBlogTab('award')">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
                Awards
            </button>
        </div>

        <div class="ap-blog-grid" id="ap-blog-grid">
            @forelse($posts as $post)
            <a href="{{ route('post.show', $post->slug) }}" class="ap-blog-card" data-type="{{ $post->type }}">
                @if($post->type === 'award')
                <div class="ap-award-ribbon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
                </div>
                @endif
                @if($post->image)
                <div class="ap-blog-image">
                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}">
                </div>
                @endif
                <div class="ap-blog-body">
                    @if($post->date)
                    <span class="ap-blog-date">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        {{ $post->date->format('M d, Y') }}
                    </span>
                    @endif
                    <h3 class="ap-blog-title">{{ $post->title }}</h3>
                    @if($post->content)
                    <p class="ap-blog-excerpt">{{ Str::limit($post->content, 120) }}</p>
                    @endif
                    <span class="ap-blog-link">
                        {{ $post->type === 'blog' ? 'Read More' : 'View Details' }}
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                    </span>
                </div>
            </a>
            @empty
            <div class="ap-blog-empty">
                <p>No posts yet. Check back soon!</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<style>
.ap-blog-tabs {
    display: flex;
    justify-content: center;
    gap: 12px;
    margin-bottom: 40px;
}
.ap-blog-tab {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 28px;
    border-radius: 50px;
    border: 1px solid var(--border-default);
    background: transparent;
    color: var(--text-muted);
    font-family: var(--font-heading);
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    cursor: pointer;
    transition: var(--transition);
}
.ap-blog-tab:hover {
    border-color: var(--color-doctor);
    color: var(--color-doctor);
}
.ap-blog-tab.active {
    background: var(--color-doctor);
    border-color: var(--color-doctor);
    color: #fff;
}
.ap-blog-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}
.ap-blog-card {
    position: relative;
    background: var(--bg-card-default);
    border: 1px solid var(--border-default);
    border-radius: 16px;
    overflow: hidden;
    transition: var(--transition);
}
.ap-blog-card:hover {
    border-color: var(--color-doctor);
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(25,162,208,0.15);
}
.ap-blog-card[data-type="award"] {
    border-color: transparent;
    background: linear-gradient(135deg, var(--bg-card-default), rgba(255,215,0,0.05));
}
.ap-blog-card[data-type="award"]:hover {
    border-color: #ffd700;
    box-shadow: 0 8px 30px rgba(255,215,0,0.12);
}
.ap-award-ribbon {
    position: absolute;
    top: 12px;
    right: 12px;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(255,215,0,0.15);
    color: #ffd700;
    z-index: 2;
}
.ap-blog-image {
    width: 100%;
    height: 200px;
    overflow: hidden;
}
.ap-blog-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}
.ap-blog-card:hover .ap-blog-image img {
    transform: scale(1.05);
}
.ap-blog-body {
    padding: 20px;
}
.ap-blog-date {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    color: var(--text-muted);
    margin-bottom: 8px;
}
.ap-blog-title {
    font-family: var(--font-heading);
    font-size: 17px;
    font-weight: 600;
    color: var(--text-heading);
    margin-bottom: 8px;
    line-height: 1.4;
}
.ap-blog-excerpt {
    font-size: 14px;
    color: var(--text-muted);
    line-height: 1.6;
    margin-bottom: 12px;
}
.ap-blog-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    font-weight: 600;
    color: var(--color-doctor);
    text-decoration: none;
    transition: var(--transition);
}
.ap-blog-link:hover {
    gap: 10px;
}
.ap-blog-empty {
    grid-column: 1 / -1;
    text-align: center;
    padding: 60px 20px;
    color: var(--text-muted);
    font-size: 16px;
}
@media (max-width: 1024px) {
    .ap-blog-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 640px) {
    .ap-blog-grid { grid-template-columns: 1fr; }
    .ap-blog-tabs { gap: 8px; }
    .ap-blog-tab { padding: 10px 20px; font-size: 12px; }
}
</style>

<script>
function switchBlogTab(tab) {
    document.querySelectorAll('.ap-blog-tab').forEach(function(btn) {
        btn.classList.toggle('active', btn.dataset.tab === tab);
    });
    document.querySelectorAll('.ap-blog-card').forEach(function(card) {
        card.style.display = card.dataset.type === tab ? 'block' : 'none';
    });
}
document.addEventListener('DOMContentLoaded', function() {
    switchBlogTab('blog');
});
</script>
