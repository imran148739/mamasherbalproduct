@extends('admin.layout.app')

@section('title', 'Manage About Us Content')

@section('content')

    {{-- Top Header Card --}}
    <div class="card" style="background: linear-gradient(135deg, rgba(30,30,66,0.9), rgba(26,26,62,0.95)); border: 1px solid rgba(108,99,255,0.25); margin-bottom: 24px;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
            <div style="display: flex; align-items: center; gap: 16px;">
                <div style="font-size: 38px; width: 62px; height: 62px; background: rgba(108,99,255,0.15); border: 1px solid rgba(108,99,255,0.35); border-radius: 14px; display: flex; align-items: center; justify-content: center;">
                    📖
                </div>
                <div>
                    <h2 style="font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 4px;">About Us Content Management</h2>
                    <p style="color: var(--text-secondary); font-size: 13px; max-width: 650px;">
                        Dynamically customize the story text, media images, promotional video, author signature, and counter stats displayed on the public About Us page.
                    </p>
                </div>
            </div>
            <div>
                <a href="{{ route('about') }}" target="_blank" class="btn btn--outline" style="border-color: rgba(255,255,255,0.2); color: #fff;">
                    🌐 View Live About Page ↗
                </a>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="display: flex; flex-direction: column; gap: 24px;">

            {{-- 1. Main Story & Headings --}}
            <div class="card">
                <div class="card__header">
                    <div>
                        <div class="card__title">📝 Section Headings & Story Text</div>
                        <div class="card__desc">Main titles and company story paragraphs displayed next to the photos.</div>
                    </div>
                </div>

                <div class="grid grid--2">
                    <div class="form-group">
                        <label class="form-label">Subtitle / Badge</label>
                        <input type="text" name="subtitle" class="form-input"
                               value="{{ $currentValues['subtitle'] ?? 'Why Choose us' }}"
                               placeholder="e.g. Why Choose us">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Main Heading</label>
                        <input type="text" name="main_title" class="form-input"
                               value="{{ $currentValues['main_title'] ?? 'We do not buy from the open market & traders.' }}"
                               placeholder="e.g. We do not buy from the open market & traders.">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Story Description — Paragraph 1</label>
                    <textarea name="desc_1" class="form-textarea" rows="4"
                              placeholder="First paragraph of the company story...">{{ $currentValues['desc_1'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit illo, est repellendus are quia voluptate neque reiciendis ea placeat labore maiores cum, hic ducimus ad a dolorem soluta consectetur adipisci. Perspiciatis quas ab quibusdam is.' }}</textarea>
                </div>

                <div class="form-group" style="margin-bottom: 0;">
                    <label class="form-label">Story Description — Paragraph 2</label>
                    <textarea name="desc_2" class="form-textarea" rows="4"
                              placeholder="Second paragraph of the company story...">{{ $currentValues['desc_2'] ?? 'Itaque accusantium eveniet a laboriosam dolorem? Magni suscipit est corrupti explicabo non perspiciatis, excepturi ut asperiores assumenda rerum? Provident ab corrupti sequi, voluptates repudiandae eius odit aut.' }}</textarea>
                </div>
            </div>

            {{-- 2. Media Photos & Video --}}
            <div class="card">
                <div class="card__header">
                    <div>
                        <div class="card__title">📸 Media Photos & Promotional Video</div>
                        <div class="card__desc">Upload the dual showcase images and set the video pop-up / lightbox URL.</div>
                    </div>
                </div>

                <div class="grid grid--2">
                    {{-- Image 1 --}}
                    <div class="form-group">
                        <label class="form-label">About Showcase Image 1</label>
                        @php
                            $img1 = $currentValues['image_1'] ?? 'img/other/about-thumb-list1.png';
                        @endphp
                        <div style="margin-bottom: 10px;">
                            <img src="{{ str_starts_with($img1, 'http') ? $img1 : asset($img1) }}" alt="Showcase 1"
                                 style="max-height: 140px; border-radius: 8px; border: 1px solid var(--border); object-fit: cover;">
                        </div>
                        <div class="form-file-wrapper">
                            <input type="file" name="image_1" accept="image/*">
                            <div class="form-file-label">
                                <span>Upload new image</span> (leave empty to keep current)
                            </div>
                        </div>
                    </div>

                    {{-- Image 2 --}}
                    <div class="form-group">
                        <label class="form-label">About Showcase Image 2 (Behind Video Play Button)</label>
                        @php
                            $img2 = $currentValues['image_2'] ?? 'img/other/about-thumb-list2.png';
                        @endphp
                        <div style="margin-bottom: 10px;">
                            <img src="{{ str_starts_with($img2, 'http') ? $img2 : asset($img2) }}" alt="Showcase 2"
                                 style="max-height: 140px; border-radius: 8px; border: 1px solid var(--border); object-fit: cover;">
                        </div>
                        <div class="form-file-wrapper">
                            <input type="file" name="image_2" accept="image/*">
                            <div class="form-file-label">
                                <span>Upload new image</span> (leave empty to keep current)
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group" style="margin-top: 12px; margin-bottom: 0;">
                    <label class="form-label">Video Lightbox URL (Vimeo / YouTube)</label>
                    <input type="text" name="video_url" class="form-input"
                           value="{{ $currentValues['video_url'] ?? 'https://vimeo.com/115041822' }}"
                           placeholder="https://vimeo.com/115041822 or https://www.youtube.com/watch?v=...">
                    <small style="color: var(--text-muted); font-size: 11px; margin-top: 4px; display: block;">
                        When clicked on the page, this video plays inside a pop-up lightbox.
                    </small>
                </div>
            </div>

            {{-- 3. Author & Signature --}}
            <div class="card">
                <div class="card__header">
                    <div>
                        <div class="card__title">✍️ Executive Profile & Signature</div>
                        <div class="card__desc">Author name, title / designation, and signature graphic.</div>
                    </div>
                </div>

                <div class="grid grid--3">
                    <div class="form-group">
                        <label class="form-label">Author Name</label>
                        <input type="text" name="author_name" class="form-input"
                               value="{{ $currentValues['author_name'] ?? 'Bruce Sutton' }}"
                               placeholder="e.g. Bruce Sutton">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Role / Designation</label>
                        <input type="text" name="author_rank" class="form-input"
                               value="{{ $currentValues['author_rank'] ?? 'Spa Manager' }}"
                               placeholder="e.g. Spa Manager / Founder">
                    </div>

                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label">Signature Graphic</label>
                        @php
                            $sig = $currentValues['author_signature'] ?? 'img/icon/signature.png';
                        @endphp
                        @if($sig)
                            <div style="margin-bottom: 6px;">
                                <img src="{{ str_starts_with($sig, 'http') ? $sig : asset($sig) }}" alt="Signature"
                                     style="max-height: 40px; filter: brightness(1.5); background: rgba(0,0,0,0.3); padding: 4px 8px; border-radius: 4px;">
                            </div>
                        @endif
                        <div class="form-file-wrapper">
                            <input type="file" name="author_signature" accept="image/*">
                            <div class="form-file-label" style="padding: 10px;">
                                <span>Upload signature</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 4. Achievement Counters --}}
            <div class="card">
                <div class="card__header">
                    <div>
                        <div class="card__title">🏆 Fun Facts & Achievement Counters</div>
                        <div class="card__desc">Animated numbers displayed in the dark banner strip.</div>
                    </div>
                </div>

                <div class="grid grid--3">
                    {{-- Counter 1 --}}
                    <div style="background: rgba(255,255,255,0.03); border: 1px solid var(--border); border-radius: 10px; padding: 16px;">
                        <div style="font-weight: 700; color: #fff; margin-bottom: 12px; font-size: 13px;">Counter 1</div>
                        <div class="form-group">
                            <label class="form-label">Stat Number</label>
                            <input type="number" name="counter_1_number" class="form-input"
                                   value="{{ $currentValues['counter_1_number'] ?? '50' }}" placeholder="50">
                        </div>
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-label">Stat Label</label>
                            <input type="text" name="counter_1_title" class="form-input"
                                   value="{{ $currentValues['counter_1_title'] ?? 'YEARS OF FOUNDATION' }}" placeholder="YEARS OF FOUNDATION">
                        </div>
                    </div>

                    {{-- Counter 2 --}}
                    <div style="background: rgba(255,255,255,0.03); border: 1px solid var(--border); border-radius: 10px; padding: 16px;">
                        <div style="font-weight: 700; color: #fff; margin-bottom: 12px; font-size: 13px;">Counter 2</div>
                        <div class="form-group">
                            <label class="form-label">Stat Number</label>
                            <input type="number" name="counter_2_number" class="form-input"
                                   value="{{ $currentValues['counter_2_number'] ?? '80' }}" placeholder="80">
                        </div>
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-label">Stat Label</label>
                            <input type="text" name="counter_2_title" class="form-input"
                                   value="{{ $currentValues['counter_2_title'] ?? 'HAPPY CUSTOMERS' }}" placeholder="HAPPY CUSTOMERS">
                        </div>
                    </div>

                    {{-- Counter 3 --}}
                    <div style="background: rgba(255,255,255,0.03); border: 1px solid var(--border); border-radius: 10px; padding: 16px;">
                        <div style="font-weight: 700; color: #fff; margin-bottom: 12px; font-size: 13px;">Counter 3</div>
                        <div class="form-group">
                            <label class="form-label">Stat Number</label>
                            <input type="number" name="counter_3_number" class="form-input"
                                   value="{{ $currentValues['counter_3_number'] ?? '70' }}" placeholder="70">
                        </div>
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-label">Stat Label</label>
                            <input type="text" name="counter_3_title" class="form-input"
                                   value="{{ $currentValues['counter_3_title'] ?? 'MONTHLY ORDERS' }}" placeholder="MONTHLY ORDERS">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Submit Action Bar --}}
            <div class="card" style="padding: 16px 24px; display: flex; justify-content: space-between; align-items: center;">
                <span style="color: var(--text-muted); font-size: 13px;">All changes apply instantly to the public About Us page.</span>
                <button type="submit" class="btn btn--success" style="padding: 10px 24px; font-size: 14px;">
                    💾 Save About Us Changes
                </button>
            </div>

        </div>
    </form>

@endsection
