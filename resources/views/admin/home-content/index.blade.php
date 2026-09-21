@extends('admin.layout.app')

@section('title', 'Home Page Sections')

@section('content')
    <div style="margin-bottom: 24px;">
        <p style="color: var(--text-secondary); font-size: 14px;">
            Select a section below to edit its content and images. Changes are reflected live on the homepage.
        </p>
    </div>

    <div class="grid grid--2">
        @foreach($sections as $key => $config)
            <div class="card">
                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <div>
                        <div class="card__title">{{ $config['label'] }}</div>
                        <div class="card__desc">{{ count($config['fields']) }} editable fields</div>
                    </div>
                    <a href="{{ route('admin.home-content.edit', $key) }}" class="btn btn--primary" style="font-size: 13px;">
                        ✏️ Edit
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
