<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ Str::limit($post->content, 160) }}">
    <title>{{ $post->title }} | Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Unbounded:wght@400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.header')

    <main>
        <section class="ap-post-hero" style="padding: 140px 0 60px; background: var(--bg-default);">
            <div class="container">
                <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                    <span style="display: inline-block; padding: 6px 16px; border-radius: 50px; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; background: {{ $post->type === 'award' ? 'rgba(255,215,0,0.15)' : 'rgba(25,162,208,0.15)' }}; color: {{ $post->type === 'award' ? '#ffd700' : 'var(--color-doctor)' }}; margin-bottom: 16px;">
                        {{ $post->type === 'blog' ? 'Article' : 'Award' }}
                    </span>
                    <h1 style="font-family: var(--font-heading); font-size: 36px; font-weight: 700; color: var(--text-heading); line-height: 1.3; margin-bottom: 16px;">{{ $post->title }}</h1>
                    @if($post->date)
                    <div style="display: flex; align-items: center; justify-content: center; gap: 8px; color: var(--text-muted); font-size: 14px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        {{ $post->date->format('F d, Y') }}
                    </div>
                    @endif
                </div>
            </div>
        </section>

        @if($post->image)
        <section style="background: var(--bg-default); padding-bottom: 40px;">
            <div class="container">
                <div style="max-width: 900px; margin: 0 auto; border-radius: 16px; overflow: hidden;">
                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width: 100%; height: auto; max-height: 500px; object-fit: cover; display: block;">
                </div>
            </div>
        </section>
        @endif

        <section class="ap-post-content" style="padding: 40px 0 80px; background: var(--bg-default);">
            <div class="container">
                <div class="ap-post-layout" style="display: grid; grid-template-columns: 1fr 280px; gap: 40px; align-items: start;">
                    <article style="background: var(--bg-card-default); border: 1px solid var(--border-default); border-radius: 16px; padding: 40px;">
                        <div class="ap-post-body" style="font-size: 16px; line-height: 1.8; color: var(--text-default);">
                            {!! nl2br(e($post->content)) !!}
                        </div>
                        @if($post->url)
                        <div style="margin-top: 32px; padding-top: 24px; border-top: 1px solid var(--border-default);">
                            <a href="{{ $post->url }}" target="_blank" style="display: inline-flex; align-items: center; gap: 8px; padding: 12px 24px; border-radius: 50px; background: var(--color-doctor); color: #fff; font-size: 14px; font-weight: 600; text-decoration: none; transition: opacity 0.3s;">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                                {{ $post->type === 'blog' ? 'View Original Article' : 'View Award Details' }}
                            </a>
                        </div>
                        @endif
                        <div style="margin-top: 24px;">
                            <a href="/#blog" style="display: inline-flex; align-items: center; gap: 6px; color: var(--text-muted); font-size: 14px; text-decoration: none; transition: color 0.3s;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                                Back to Blog & Awards
                            </a>
                        </div>
                    </article>

                    <aside class="ap-post-sidebar" style="position: sticky; top: 100px;">
                        @if($recentPosts->count() > 0)
                        <div style="background: var(--bg-card-default); border: 1px solid var(--border-default); border-radius: 16px; padding: 24px;">
                            <h3 style="font-family: var(--font-heading); font-size: 16px; font-weight: 600; color: var(--text-heading); margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid var(--border-default);">
                                Recent {{ $post->type === 'blog' ? 'Articles' : 'Awards' }}
                            </h3>
                            <div style="display: flex; flex-direction: column; gap: 16px;">
                                @foreach($recentPosts as $recent)
                                <a href="{{ route('post.show', $recent->slug) }}" style="display: flex; gap: 12px; text-decoration: none; padding-bottom: 12px; border-bottom: 1px solid var(--border-default); transition: opacity 0.3s;">
                                    @if($recent->image)
                                    <div style="width: 60px; height: 60px; border-radius: 8px; overflow: flex-shrink: 0;">
                                        <img src="{{ Storage::url($recent->image) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    @endif
                                    <div style="flex: 1; min-width: 0;">
                                        <h4 style="font-size: 13px; font-weight: 600; color: var(--text-heading); margin: 0 0 4px; line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $recent->title }}</h4>
                                        @if($recent->date)
                                        <span style="font-size: 11px; color: var(--text-muted);">{{ $recent->date->format('M d, Y') }}</span>
                                        @endif
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </aside>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <style>
    .ap-post-body h2 { font-family: var(--font-heading); font-size: 22px; font-weight: 700; color: var(--text-heading); margin: 32px 0 12px; }
    .ap-post-body h3 { font-family: var(--font-heading); font-size: 18px; font-weight: 600; color: var(--text-heading); margin: 24px 0 8px; }
    .ap-post-body p { margin-bottom: 16px; }
    .ap-post-body ul, .ap-post-body ol { margin: 0 0 16px 24px; }
    .ap-post-body li { margin-bottom: 6px; }
    @media (max-width: 768px) {
        .ap-post-layout { grid-template-columns: 1fr; }
    }
    </style>
</body>
</html>
