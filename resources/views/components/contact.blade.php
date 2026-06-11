<section id="contact" class="ap-section-gap" style="background: var(--bg-body);">
    <div class="container">
        <div class="ap-section-title-wrap text-center">
            <h2 class="ap-section-title">
                <span>Contact</span>
                Get in Touch
            </h2>
            <p class="ap-section-desc" style="max-width: 500px; margin: 0 auto;">Have a question or want to work together? Drop me a message!</p>
        </div>
        <div class="ap-contact-grid">
            <div class="ap-contact-info">
                <div class="ap-contact-info-item">
                    <div class="ap-contact-info-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#19A2D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </div>
                    <div>
                        <span class="ap-contact-info-label">Email</span>
                        <a href="mailto:{{ $profile?->email ?? 'hello@domain.com' }}" class="ap-contact-info-value">{{ $profile?->email ?? 'hello@domain.com' }}</a>
                    </div>
                </div>
                <div class="ap-contact-info-item">
                    <div class="ap-contact-info-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#19A2D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <div>
                        <span class="ap-contact-info-label">Location</span>
                        <span class="ap-contact-info-value">{{ $profile?->location ?? 'Sydney, Australia' }}</span>
                    </div>
                </div>
                <div class="ap-contact-info-item">
                    <div class="ap-contact-info-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#19A2D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <div>
                        <span class="ap-contact-info-label">Availability</span>
                        <span class="ap-contact-info-value">Available for Freelance</span>
                    </div>
                </div>
            </div>
            <form action="{{ route('contact.store') }}" method="POST" class="ap-contact-form">
                @csrf
                @if(session('success'))
                <div class="success-message">{{ session('success') }}</div>
                @endif
                <div class="ap-form-row">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name *" required>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email *" required>
                </div>
                <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Subject">
                <textarea name="message" rows="5" placeholder="Your Message *" required>{{ old('message') }}</textarea>
                <button type="submit" class="ap-btn-primary" style="align-self: flex-start;">
                    <span>Send Message</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                </button>
            </form>
        </div>
    </div>
</section>
