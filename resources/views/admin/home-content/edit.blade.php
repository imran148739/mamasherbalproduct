@extends('admin.layout.app')

@section('title', 'Edit: ' . $sectionConfig['label'])

@section('content')
    <div style="margin-bottom: 24px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
        <div style="display: flex; align-items: center; gap: 12px;">
            <a href="{{ $section === 'header' ? route('admin.dashboard') : route('admin.home-content.index') }}" class="btn btn--outline" style="font-size: 13px;">
                ← Back
            </a>
            <span style="color: var(--text-muted); font-size: 14px;">
                Editing <strong style="color: var(--accent);">{{ $sectionConfig['label'] }}</strong>
            </span>
        </div>
        @if($section === 'banner' || $section === 'hero_slider' || isset($sectionConfig['recommended_size']))
            @php
                $secSize = $sectionConfig['recommended_size'] ?? ($section === 'hero_slider' ? '1521 × 515 px' : '570 × 311 px');
            @endphp
            <div>
                <span class="badge" style="background: rgba(78, 205, 196, 0.15); color: #4ecdc4; border: 1px solid rgba(78, 205, 196, 0.35); font-size: 12px; padding: 5px 12px; border-radius: 6px; font-weight: 700;">
                    📐 Recommended Size: {{ $secSize }}
                </span>
            </div>
        @endif
    </div>

    <form action="{{ $section === 'header' ? route('admin.header.update') : route('admin.home-content.update', $section) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card" style="max-width: 900px;">
            @php $lastGroup = ''; @endphp

            @foreach($sectionConfig['fields'] as $key => $config)
                @php
                    // Detect group changes for visual separation (e.g., slide_1 → slide_2)
                    preg_match('/^(.+?)_(?:title|subtitle|desc|btn_text|btn_url|image|bg_image|name|role|review|url)$/i', $key, $m);
                    $currentGroup = $m[1] ?? '';
                    $showDivider = ($currentGroup !== $lastGroup && $lastGroup !== '' && $currentGroup !== '');
                    $lastGroup = $currentGroup;

                    $fieldSize = $config['recommended_size'] ?? null;
                    if (!$fieldSize && $config['type'] === 'image') {
                        if ($section === 'hero_slider') $fieldSize = '1521 × 515 px';
                        elseif ($section === 'banner') $fieldSize = '570 × 311 px';
                    }
                @endphp

                @if($showDivider)
                    <hr class="section-divider">
                    @php
                        // Create a human-friendly heading
                        $heading = ucwords(str_replace('_', ' ', $currentGroup));
                    @endphp
                    <div class="section-heading">{{ $heading }}</div>
                @endif

                <div class="form-group">
                    <label class="form-label" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 8px;">
                        <span>{{ $config['label'] }}</span>
                        @if($fieldSize)
                            <span class="badge" style="background: rgba(78, 205, 196, 0.15); color: #4ecdc4; border: 1px solid rgba(78, 205, 196, 0.35); font-size: 11px; padding: 2px 8px; border-radius: 4px; font-weight: 600;">
                                Recommended: {{ $fieldSize }}
                            </span>
                        @endif
                    </label>

                    @if($config['type'] === 'image')
                        @php
                            $currentValue = $currentValues[$key] ?? $config['default'];
                        @endphp

                        @if($currentValue)
                            <div class="current-image" style="max-width: 380px; max-height: 200px; border-radius: 10px; overflow: hidden; border: 1px solid rgba(255,255,255,0.12); background: rgba(0,0,0,0.25); margin-bottom: 8px; display: inline-flex; align-items: center; justify-content: center; padding: 6px;">
                                <img src="{{ str_starts_with($currentValue, 'http') ? $currentValue : asset($currentValue) }}" alt="{{ $config['label'] }}" style="max-width: 100%; max-height: 188px; width: auto; height: auto; object-fit: contain; display: block; border-radius: 6px;">
                            </div>
                            <div style="font-size: 11px; color: var(--text-muted); margin-top: 4px; margin-bottom: 8px;">
                                Current: {{ $currentValue }}
                            </div>
                        @endif

                        <div class="form-file-wrapper">
                            <input type="file" name="{{ $key }}" accept="image/*">
                            <div class="form-file-label">
                                <span>Click to upload</span> or drag a new image here
                                <div style="font-size: 11px; margin-top: 4px; color: var(--text-muted);">
                                    PNG, JPG, WEBP up to 25MB. Leave empty to keep current.
                                    @if($fieldSize)
                                        <div style="color: #4ecdc4; font-weight: 600; margin-top: 4px;">
                                            Recommended Size: {{ $fieldSize }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    @elseif($config['type'] === 'textarea')
                        <textarea name="{{ $key }}" class="form-textarea"
                            placeholder="Optional — leave empty if not needed">{{ array_key_exists($key, $currentValues) ? ($currentValues[$key] ?? '') : $config['default'] }}</textarea>

                    @elseif($config['type'] === 'url')
                        <input type="text" name="{{ $key }}" class="form-input"
                            value="{{ array_key_exists($key, $currentValues) ? ($currentValues[$key] ?? '') : $config['default'] }}"
                            placeholder="Optional URL (leave empty if not needed)">

                    @else
                        <input type="text" name="{{ $key }}" class="form-input"
                            value="{{ array_key_exists($key, $currentValues) ? ($currentValues[$key] ?? '') : $config['default'] }}"
                            placeholder="Optional text (leave empty if not needed)">
                    @endif
                </div>
            @endforeach

            <div style="padding-top: 16px; border-top: 1px solid var(--border); display: flex; gap: 12px;">
                <button type="submit" class="btn btn--success">
                    💾 Save Changes
                </button>
                <a href="{{ $section === 'header' ? route('admin.dashboard') : route('admin.home-content.index') }}" class="btn btn--outline">
                    Cancel
                </a>
            </div>
        </div>
    </form>
@endsection
