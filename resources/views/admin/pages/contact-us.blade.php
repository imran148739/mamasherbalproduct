@extends('admin.layout.app')

@section('title', 'Manage Contact Us Content')

@section('content')

    {{-- Top Header Card --}}
    <div class="card" style="background: linear-gradient(135deg, rgba(30,30,66,0.9), rgba(26,26,62,0.95)); border: 1px solid rgba(78,205,196,0.3); margin-bottom: 24px;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
            <div style="display: flex; align-items: center; gap: 16px;">
                <div style="font-size: 38px; width: 62px; height: 62px; background: rgba(78,205,196,0.15); border: 1px solid rgba(78,205,196,0.35); border-radius: 14px; display: flex; align-items: center; justify-content: center;">
                    📞
                </div>
                <div>
                    <h2 style="font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 4px;">Contact Us Content Management</h2>
                    <p style="color: var(--text-secondary); font-size: 13px; max-width: 650px;">
                        Manage your phone numbers, support emails, physical office location, social media links, and Google Map embed for the public Contact Us page.
                    </p>
                </div>
            </div>
            <div>
                <a href="{{ route('contact') }}" target="_blank" class="btn btn--outline" style="border-color: rgba(255,255,255,0.2); color: #fff;">
                    🌐 View Live Contact Page ↗
                </a>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.contact.update') }}" method="POST">
        @csrf

        <div style="display: flex; flex-direction: column; gap: 24px;">

            {{-- 1. Section Headings --}}
            <div class="card">
                <div class="card__header">
                    <div>
                        <div class="card__title">📝 Page & Form Headings</div>
                        <div class="card__desc">Titles displayed above the contact area and over the message form.</div>
                    </div>
                </div>

                <div class="grid grid--3">
                    <div class="form-group">
                        <label class="form-label">Page Subtitle</label>
                        <input type="text" name="subtitle" class="form-input"
                               value="{{ $currentValues['subtitle'] ?? 'Contact With Us' }}"
                               placeholder="e.g. Contact With Us">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Main Title</label>
                        <input type="text" name="main_title" class="form-input"
                               value="{{ $currentValues['main_title'] ?? 'Get In Touch' }}"
                               placeholder="e.g. Get In Touch">
                    </div>

                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label">Contact Form Header</label>
                        <input type="text" name="form_title" class="form-input"
                               value="{{ $currentValues['form_title'] ?? 'Contact Us' }}"
                               placeholder="e.g. Contact Us / Send a Message">
                    </div>
                </div>
            </div>

            {{-- 2. Contact Phone & Email Info --}}
            <div class="grid grid--2">
                {{-- Phone Card --}}
                <div class="card">
                    <div class="card__header">
                        <div>
                            <div class="card__title">📱 Telephone & Hotline</div>
                            <div class="card__desc">Phone numbers shown on the contact info card.</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Phone Box Title</label>
                        <input type="text" name="phone_title" class="form-input"
                               value="{{ $currentValues['phone_title'] ?? 'Contact Us' }}"
                               placeholder="e.g. Contact Us">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Phone Box Subtitle / Note</label>
                        <input type="text" name="phone_subtitle" class="form-input"
                               value="{{ $currentValues['phone_subtitle'] ?? 'Call our customer care team' }}"
                               placeholder="e.g. Call our customer care team">
                    </div>

                    <div class="grid grid--2">
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-label">Primary Phone</label>
                            <input type="text" name="phone_1" class="form-input"
                                   value="{{ $currentValues['phone_1'] ?? '+01234-567890' }}"
                                   placeholder="+01234-567890">
                        </div>

                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-label">Secondary Phone (Optional)</label>
                            <input type="text" name="phone_2" class="form-input"
                                   value="{{ $currentValues['phone_2'] ?? '+01234-5688765' }}"
                                   placeholder="+01234-5688765">
                        </div>
                    </div>
                </div>

                {{-- Email Card --}}
                <div class="card">
                    <div class="card__header">
                        <div>
                            <div class="card__title">✉️ Email Addresses</div>
                            <div class="card__desc">Inquiry and customer support email addresses.</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email Box Title</label>
                        <input type="text" name="email_title" class="form-input"
                               value="{{ $currentValues['email_title'] ?? 'Email Address' }}"
                               placeholder="e.g. Email Address">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Primary Email</label>
                        <input type="email" name="email_1" class="form-input"
                               value="{{ $currentValues['email_1'] ?? 'info@example.com' }}"
                               placeholder="info@example.com">
                    </div>

                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label">Support Email (Optional)</label>
                        <input type="email" name="email_2" class="form-input"
                               value="{{ $currentValues['email_2'] ?? 'support@example.com' }}"
                               placeholder="support@example.com">
                    </div>
                </div>
            </div>

            {{-- 3. Location & Social Media --}}
            <div class="grid grid--2">
                {{-- Office Location --}}
                <div class="card">
                    <div class="card__header">
                        <div>
                            <div class="card__title">📍 Office Location & Address</div>
                            <div class="card__desc">Physical address displayed on the contact info card.</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Location Box Title</label>
                        <input type="text" name="office_title" class="form-input"
                               value="{{ $currentValues['office_title'] ?? 'Office Location' }}"
                               placeholder="e.g. Office Location">
                    </div>

                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label">Full Street Address</label>
                        <textarea name="office_address" class="form-textarea" rows="3"
                                  placeholder="e.g. 123 Street New York City, United States Of America NY 750065.">{{ $currentValues['office_address'] ?? '123 Street New York City, United States Of America NY 750065.' }}</textarea>
                    </div>
                </div>

                {{-- Social Links --}}
                <div class="card">
                    <div class="card__header">
                        <div>
                            <div class="card__title">🌐 Social Media Links</div>
                            <div class="card__desc">Social links shown at the bottom of the contact info card.</div>
                        </div>
                    </div>

                    <div class="grid grid--2">
                        <div class="form-group">
                            <label class="form-label">Facebook URL</label>
                            <input type="url" name="facebook_url" class="form-input"
                                   value="{{ $currentValues['facebook_url'] ?? 'https://www.facebook.com/' }}"
                                   placeholder="https://facebook.com/...">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Twitter / X URL</label>
                            <input type="url" name="twitter_url" class="form-input"
                                   value="{{ $currentValues['twitter_url'] ?? 'https://twitter.com/' }}"
                                   placeholder="https://twitter.com/...">
                        </div>

                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-label">Instagram URL</label>
                            <input type="url" name="instagram_url" class="form-input"
                                   value="{{ $currentValues['instagram_url'] ?? 'https://www.instagram.com/' }}"
                                   placeholder="https://instagram.com/...">
                        </div>

                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-label">YouTube URL</label>
                            <input type="url" name="youtube_url" class="form-input"
                                   value="{{ $currentValues['youtube_url'] ?? 'https://www.youtube.com/' }}"
                                   placeholder="https://youtube.com/...">
                        </div>
                    </div>
                </div>
            </div>

            {{-- 4. Google Map Embed --}}
            <div class="card">
                <div class="card__header">
                    <div>
                        <div class="card__title">🗺️ Google Map Embed</div>
                        <div class="card__desc">Paste your Google Maps embed URL (or the full &lt;iframe&gt; code).</div>
                    </div>
                </div>

                @php
                    $mapUrl = $currentValues['map_iframe_url'] ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7887.465355142307!2d-0.13384360843222626!3d51.4876034467734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760532743b90e1%3A0x790260718555a20c!2sU.S.%20Embassy%2C%20London!5e0!3m2!1sen!2sbd!4v1632035375945!5m2!1sen!2sbd';
                @endphp

                <div class="form-group">
                    <label class="form-label">Google Map Embed URL or &lt;iframe&gt;</label>
                    <textarea name="map_iframe_url" class="form-textarea" rows="3"
                              placeholder="Paste Google Maps embed URL here...">{{ $mapUrl }}</textarea>
                </div>

                @if($mapUrl)
                    <div style="margin-top: 14px;">
                        <label class="form-label" style="font-size: 11px; text-transform: uppercase; color: var(--text-muted);">Current Map Preview</label>
                        <div style="border-radius: 10px; overflow: hidden; border: 1px solid var(--border); height: 220px; background: rgba(0,0,0,0.3);">
                            <iframe src="{{ $mapUrl }}" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                @endif
            </div>

            {{-- Submit Action Bar --}}
            <div class="card" style="padding: 16px 24px; display: flex; justify-content: space-between; align-items: center;">
                <span style="color: var(--text-muted); font-size: 13px;">All changes apply instantly to the public Contact Us page.</span>
                <button type="submit" class="btn btn--success" style="padding: 10px 24px; font-size: 14px;">
                    💾 Save Contact Us Changes
                </button>
            </div>

        </div>
    </form>

@endsection
