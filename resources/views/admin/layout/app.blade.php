<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel') — Mama's Herbal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg-primary: #0f0f23;
            --bg-secondary: #1a1a3e;
            --bg-card: #1e1e42;
            --bg-input: #252550;
            --accent: #6c63ff;
            --accent-hover: #5a52e0;
            --accent-glow: rgba(108, 99, 255, 0.3);
            --green: #00d68f;
            --green-glow: rgba(0, 214, 143, 0.2);
            --red: #ff6b6b;
            --orange: #ffa94d;
            --text-primary: #e8e8f0;
            --text-secondary: #9090b0;
            --text-muted: #6868a0;
            --border: rgba(255,255,255,0.06);
            --sidebar-w: 270px;
            --radius: 12px;
            --radius-sm: 8px;
            --shadow: 0 8px 32px rgba(0,0,0,0.3);
        }

        body {
            font-family: 'Inter', -apple-system, sans-serif;
            background: var(--bg-primary);
            color: var(--text-primary);
            min-height: 100vh;
            display: flex;
            line-height: 1.6;
        }

        /* ─── Sidebar ─── */
        .sidebar {
            width: var(--sidebar-w);
            background: var(--bg-secondary);
            border-right: 1px solid var(--border);
            height: 100vh;
            position: fixed;
            top: 0; left: 0;
            display: flex;
            flex-direction: column;
            z-index: 100;
            transition: transform 0.3s ease;
        }

        .sidebar__brand {
            padding: 22px 20px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .sidebar__brand-icon {
            width: 40px; height: 40px;
            background: linear-gradient(135deg, var(--accent), var(--green));
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        .sidebar__brand-text {
            font-weight: 700;
            font-size: 15px;
            color: var(--text-primary);
            line-height: 1.2;
        }

        .sidebar__brand-text small {
            font-weight: 400;
            font-size: 11px;
            color: var(--text-muted);
            display: block;
        }

        .sidebar__nav {
            flex: 1;
            padding: 14px 12px;
            overflow-y: auto;
        }

        .sidebar__label {
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: var(--text-muted);
            padding: 12px 12px 6px;
        }

        .sidebar__link {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 9px 14px;
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            border-radius: var(--radius-sm);
            transition: all 0.2s ease;
            margin-bottom: 2px;
        }

        .sidebar__link:hover {
            background: rgba(108, 99, 255, 0.1);
            color: var(--text-primary);
        }

        .sidebar__link.active {
            background: linear-gradient(135deg, rgba(108,99,255,0.25), rgba(0,214,143,0.15));
            color: #fff;
            box-shadow: inset 3px 0 0 var(--accent);
            font-weight: 600;
        }

        .sidebar__link-icon {
            font-size: 16px;
            width: 22px;
            text-align: center;
            flex-shrink: 0;
        }

        /* ─── Sub-nav Dropdown Styles ─── */
        .sidebar__dropdown-btn {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 9px 14px;
            color: var(--text-secondary);
            background: transparent;
            border: none;
            font-size: 13px;
            font-weight: 600;
            border-radius: var(--radius-sm);
            cursor: pointer;
            transition: all 0.2s ease;
            font-family: inherit;
            text-align: left;
            margin-bottom: 2px;
        }

        .sidebar__dropdown-btn:hover {
            background: rgba(108, 99, 255, 0.1);
            color: var(--text-primary);
        }

        .sidebar__dropdown-btn.active {
            background: rgba(108, 99, 255, 0.16);
            color: #fff;
            box-shadow: inset 3px 0 0 var(--accent);
        }

        .sidebar__dropdown-chevron {
            transition: transform 0.25s ease;
            font-size: 9px;
            color: var(--text-muted);
            margin-left: auto;
        }

        .sidebar__dropdown.open .sidebar__dropdown-chevron {
            transform: rotate(180deg);
            color: var(--accent);
        }

        .sidebar__subnav {
            display: none;
            padding-left: 10px;
            margin: 4px 0 8px 12px;
            border-left: 1.5px solid rgba(108, 99, 255, 0.25);
            flex-direction: column;
            gap: 2px;
        }

        .sidebar__dropdown.open .sidebar__subnav {
            display: flex;
        }

        .sidebar__sublink {
            display: flex;
            align-items: center;
            gap: 9px;
            padding: 7px 12px;
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 12.5px;
            font-weight: 500;
            border-radius: var(--radius-sm);
            transition: all 0.18s ease;
            position: relative;
        }

        .sidebar__sublink:hover {
            background: rgba(108, 99, 255, 0.12);
            color: #fff;
            padding-left: 15px;
        }

        .sidebar__sublink.active {
            background: linear-gradient(135deg, rgba(108,99,255,0.3), rgba(0,214,143,0.18));
            color: #fff;
            font-weight: 600;
            box-shadow: inset 3px 0 0 var(--accent);
        }

        .sidebar__sublink-icon {
            font-size: 14px;
            width: 18px;
            text-align: center;
            flex-shrink: 0;
        }

        .sidebar__footer {
            padding: 14px 12px;
            border-top: 1px solid var(--border);
        }

        .sidebar__logout {
            display: flex; align-items: center; gap: 10px;
            padding: 9px 14px;
            background: rgba(255,107,107,0.08);
            border: none; border-radius: var(--radius-sm);
            color: var(--red);
            font-size: 13px; font-weight: 500;
            cursor: pointer;
            width: 100%;
            transition: all 0.2s ease;
            font-family: inherit;
        }

        .sidebar__logout:hover {
            background: rgba(255,107,107,0.18);
        }

        /* ─── Main Content ─── */
        .main {
            margin-left: var(--sidebar-w);
            flex: 1;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main__header {
            padding: 18px 32px;
            background: var(--bg-secondary);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 50;
            backdrop-filter: blur(20px);
        }

        .main__header h1 {
            font-size: 20px;
            font-weight: 700;
            color: #ffffff;
        }

        .main__header-badge {
            font-size: 12px;
            padding: 4px 12px;
            background: var(--green-glow);
            color: var(--green);
            border-radius: 20px;
            font-weight: 600;
        }

        .main__body {
            padding: 28px 32px;
            flex: 1;
        }

        /* ─── Cards ─── */
        .card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: var(--shadow);
        }

        .card__header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 14px;
            border-bottom: 1px solid var(--border);
        }

        .card__title {
            font-size: 16px;
            font-weight: 700;
            color: var(--text-primary);
        }

        .card__desc {
            font-size: 13px;
            color: var(--text-secondary);
            margin-top: 2px;
        }

        /* ─── Buttons ─── */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 9px 18px;
            border-radius: var(--radius-sm);
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: all 0.2s ease;
            text-decoration: none;
            font-family: inherit;
        }

        .btn--primary {
            background: var(--accent);
            color: #fff;
            box-shadow: 0 4px 14px var(--accent-glow);
        }
        .btn--primary:hover { background: var(--accent-hover); transform: translateY(-1px); }

        .btn--success {
            background: var(--green);
            color: #0a0a1a;
            box-shadow: 0 4px 14px var(--green-glow);
        }
        .btn--success:hover { filter: brightness(1.1); transform: translateY(-1px); }

        .btn--danger {
            background: rgba(255,107,107,0.15);
            color: var(--red);
            border: 1px solid rgba(255,107,107,0.3);
        }
        .btn--danger:hover { background: var(--red); color: #fff; }

        .btn--outline {
            background: transparent;
            border: 1px solid var(--border);
            color: var(--text-secondary);
        }
        .btn--outline:hover {
            border-color: var(--text-muted);
            color: var(--text-primary);
            background: rgba(255,255,255,0.04);
        }

        .btn--sm {
            padding: 5px 10px;
            font-size: 11px;
            border-radius: 6px;
        }

        /* ─── Form Inputs ─── */
        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 6px;
        }

        .form-input, .form-textarea, .form-select {
            width: 100%;
            background: var(--bg-input);
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            padding: 10px 14px;
            color: var(--text-primary);
            font-size: 13px;
            font-family: inherit;
            transition: border-color 0.2s;
        }

        .form-input:focus, .form-textarea:focus, .form-select:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px var(--accent-glow);
        }

        .form-textarea {
            min-height: 80px;
            resize: vertical;
        }

        /* ─── Alerts ─── */
        .alert {
            padding: 12px 18px;
            border-radius: var(--radius-sm);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 13px;
            font-weight: 500;
        }
        .alert--success {
            background: rgba(0, 214, 143, 0.1);
            color: var(--green);
            border: 1px solid rgba(0, 214, 143, 0.2);
        }
        .alert--error {
            background: rgba(255, 107, 107, 0.1);
            color: var(--red);
            border: 1px solid rgba(255, 107, 107, 0.2);
        }

        /* ─── Grid ─── */
        .grid { display: grid; gap: 20px; }
        .grid--2 { grid-template-columns: repeat(2, 1fr); }
        .grid--3 { grid-template-columns: repeat(3, 1fr); }
        .grid--4 { grid-template-columns: repeat(4, 1fr); }

        /* ─── Status Badges ─── */
        .badge {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
        }
        .badge--active { background: rgba(0, 214, 143, 0.15); color: var(--green); }
        .badge--inactive { background: rgba(255, 107, 107, 0.15); color: var(--red); }
        .badge--tag { background: rgba(108, 99, 255, 0.15); color: var(--accent); }

        /* ─── DataTables Custom Dark Theme ─── */
        .dataTables_wrapper {
            color: var(--text-primary);
            font-size: 13px;
        }
        table.dataTable {
            width: 100% !important;
            border-collapse: collapse !important;
            margin: 16px 0 !important;
            border-bottom: 1px solid var(--border) !important;
        }
        table.dataTable thead th {
            background: #151532 !important;
            color: var(--text-secondary) !important;
            font-size: 11px !important;
            font-weight: 700 !important;
            text-transform: uppercase !important;
            letter-spacing: 0.8px !important;
            padding: 12px 14px !important;
            border-bottom: 1px solid var(--border) !important;
        }
        table.dataTable tbody td {
            background: var(--bg-card) !important;
            color: var(--text-primary) !important;
            padding: 12px 14px !important;
            border-bottom: 1px solid rgba(255,255,255,0.03) !important;
            vertical-align: middle !important;
        }
        table.dataTable tbody tr:hover td {
            background: rgba(108, 99, 255, 0.08) !important;
        }
        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter,
        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_paginate {
            color: var(--text-secondary) !important;
            margin-bottom: 14px;
        }
        .dataTables_wrapper .dataTables_filter input {
            background: var(--bg-input);
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            padding: 6px 12px;
            color: #fff;
            margin-left: 8px;
        }
        .dataTables_wrapper .dataTables_length select {
            background: var(--bg-input);
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            padding: 4px 8px;
            color: #fff;
            margin: 0 4px;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            background: var(--bg-input) !important;
            color: var(--text-primary) !important;
            border: 1px solid var(--border) !important;
            border-radius: 6px !important;
            padding: 4px 10px !important;
            margin: 0 2px !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: var(--accent) !important;
            color: #fff !important;
            border-color: var(--accent) !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: var(--accent-hover) !important;
            color: #fff !important;
        }

        /* ─── Modals ─── */
        .modal-backdrop {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.7);
            backdrop-filter: blur(6px);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .modal-backdrop.open { display: flex; }
        .modal-box {
            background: #1c1c3e;
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 14px;
            width: 100%;
            max-width: 620px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0,0,0,0.6);
            animation: modalIn 0.25s ease-out;
        }
        @keyframes modalIn {
            from { opacity: 0; transform: translateY(20px) scale(0.97); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
        .modal-header {
            padding: 18px 24px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .modal-header h3 { font-size: 16px; font-weight: 700; color: #fff; }
        .modal-close {
            background: none; border: none; font-size: 20px; color: var(--text-muted);
            cursor: pointer; line-height: 1; padding: 4px;
        }
        .modal-close:hover { color: #fff; }
        .modal-body { padding: 24px; }
        .modal-footer {
            padding: 16px 24px;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            background: rgba(0,0,0,0.15);
        }

        /* ─── Image thumbnail inside table ─── */
        .table-thumb {
            width: 54px; height: 54px;
            border-radius: 8px;
            object-fit: cover;
            border: 1px solid rgba(255,255,255,0.08);
            background: rgba(0,0,0,0.2);
        }

        /* ─── Form Current Image Preview ─── */
        .current-image {
            max-width: 380px;
            max-height: 200px;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.12);
            background: rgba(0, 0, 0, 0.25);
            margin-bottom: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 6px;
        }
        .current-image img {
            max-width: 100%;
            max-height: 188px;
            width: auto;
            height: auto;
            object-fit: contain;
            display: block;
            border-radius: 6px;
        }
        .section-divider {
            border: none;
            border-top: 1px solid rgba(255,255,255,0.08);
            margin: 28px 0 16px;
        }
        .section-heading {
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: var(--accent);
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    {{-- Sidebar --}}
    <aside class="sidebar" id="sidebar">
        <div class="sidebar__brand">
            <div class="sidebar__brand-icon">🌿</div>
            <div class="sidebar__brand-text">
                Mama's Herbal
                <small>Dynamic Admin Panel</small>
            </div>
        </div>

        <nav class="sidebar__nav">
            <div class="sidebar__label">Main</div>
            <a href="{{ route('admin.dashboard') }}"
               class="sidebar__link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <span class="sidebar__link-icon">📊</span>
                Dashboard
            </a>

            <div class="sidebar__label" style="margin-top:14px;">Header & Branding</div>
            <a href="{{ route('admin.header.edit') }}"
               class="sidebar__link {{ request()->routeIs('admin.header.*') || request()->is('admin/home-content/header*') ? 'active' : '' }}">
                <span class="sidebar__link-icon">🎨</span>
                Header & Logo
            </a>

            @php
                $isMasterActive = request()->is('admin/master*') || request()->is('admin/best-selling*');
                $isHomeActive = request()->is('admin/sections*') || (request()->is('admin/home-content*') && !request()->is('admin/home-content/header*'));
            @endphp

            <div class="sidebar__label" style="margin-top:14px;">Catalog & Master</div>

            {{-- Main Nav: Master --}}
            <div class="sidebar__dropdown {{ $isMasterActive ? 'open' : '' }}" id="masterDropdown">
                <button type="button" class="sidebar__dropdown-btn {{ $isMasterActive ? 'active' : '' }}" onclick="toggleDropdown('masterDropdown')">
                    <span style="display: flex; align-items: center; gap: 10px;">
                        <span class="sidebar__link-icon">📦</span>
                        <span>Master</span>
                    </span>
                    <span class="sidebar__dropdown-chevron">▼</span>
                </button>

                {{-- Sub-nav Items for Master --}}
                <div class="sidebar__subnav">
                    <a href="{{ route('admin.categories.index') }}"
                       class="sidebar__sublink {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                        <span class="sidebar__sublink-icon">🗂️</span>
                        <span>Categories</span>
                    </a>

                    <a href="{{ route('admin.products.index') }}"
                       class="sidebar__sublink {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                        <span class="sidebar__sublink-icon">🏷️</span>
                        <span>Products</span>
                    </a>

                    <a href="{{ route('admin.best-selling.index') }}"
                       class="sidebar__sublink {{ request()->routeIs('admin.best-selling.*') ? 'active' : '' }}">
                        <span class="sidebar__sublink-icon">🔥</span>
                        <span>Best Selling Items</span>
                    </a>
                </div>
            </div>

            {{-- Standalone Best Selling Menu --}}
            <div class="sidebar__label" style="margin-top:14px;">Best Selling</div>
            <a href="{{ route('admin.best-selling.index') }}"
               class="sidebar__link {{ request()->routeIs('admin.best-selling.*') ? 'active' : '' }}">
                <span class="sidebar__link-icon">🔥</span>
                Best Selling Items
            </a>

            <div class="sidebar__label" style="margin-top:14px;">Storefront Pages</div>

            {{-- Main Nav: Homepage --}}
            <div class="sidebar__dropdown {{ $isHomeActive ? 'open' : '' }}" id="homepageDropdown">
                <button type="button" class="sidebar__dropdown-btn {{ $isHomeActive ? 'active' : '' }}" onclick="toggleDropdown('homepageDropdown')">
                    <span style="display: flex; align-items: center; gap: 10px;">
                        <span class="sidebar__link-icon">🏠</span>
                        <span>Homepage</span>
                    </span>
                    <span class="sidebar__dropdown-chevron">▼</span>
                </button>

                {{-- Sub-nav Items --}}
                <div class="sidebar__subnav">
                    <a href="{{ route('admin.sections.index', 'hero_slider') }}"
                       class="sidebar__sublink {{ request()->is('admin/sections/hero_slider*') ? 'active' : '' }}">
                        <span class="sidebar__sublink-icon">🖼️</span>
                        <span>Hero Slider</span>
                    </a>

                    <a href="{{ route('admin.sections.index', 'collection') }}"
                       class="sidebar__sublink {{ request()->is('admin/sections/collection*') ? 'active' : '' }}">
                        <span class="sidebar__sublink-icon">📸</span>
                        <span>Our Collection</span>
                    </a>

                    <a href="{{ route('admin.sections.index', 'best_selling') }}"
                       class="sidebar__sublink {{ request()->is('admin/sections/best_selling*') ? 'active' : '' }}">
                        <span class="sidebar__sublink-icon">🔥</span>
                        <span>Best Selling</span>
                    </a>

                    <a href="{{ route('admin.sections.index', 'our_products') }}"
                       class="sidebar__sublink {{ request()->is('admin/sections/our_products*') ? 'active' : '' }}">
                        <span class="sidebar__sublink-icon">🌿</span>
                        <span>Monthly Specials</span>
                    </a>

                    <a href="{{ route('admin.sections.index', 'testimonial') }}"
                       class="sidebar__sublink {{ request()->is('admin/sections/testimonial*') ? 'active' : '' }}">
                        <span class="sidebar__sublink-icon">💬</span>
                        <span>Testimonials</span>
                    </a>

                    <a href="{{ route('admin.home-content.edit', 'banner') }}"
                       class="sidebar__sublink {{ request()->is('admin/home-content/banner*') ? 'active' : '' }}">
                        <span class="sidebar__sublink-icon">🏷️</span>
                        <span>Promo Banners</span>
                    </a>

                    <a href="{{ route('admin.home-content.edit', 'shipping') }}"
                       class="sidebar__sublink {{ request()->is('admin/home-content/shipping*') ? 'active' : '' }}">
                        <span class="sidebar__sublink-icon">🚚</span>
                        <span>Shipping & Benefits</span>
                    </a>
                </div>
            </div>

            <a href="{{ route('admin.about.edit') }}"
               class="sidebar__link {{ request()->routeIs('admin.about.*') ? 'active' : '' }}" style="margin-top: 6px;">
                <span class="sidebar__link-icon">📖</span>
                About Us
            </a>

            <a href="{{ route('admin.contact.edit') }}"
               class="sidebar__link {{ request()->routeIs('admin.contact.*') ? 'active' : '' }}" style="margin-top: 6px;">
                <span class="sidebar__link-icon">📞</span>
                Contact Us
            </a>

            <div class="sidebar__label" style="margin-top:14px;">Quick Links</div>
            <a href="/" target="_blank" class="sidebar__link">
                <span class="sidebar__link-icon">🌐</span>
                View Live Store ↗
            </a>
        </nav>

        <div class="sidebar__footer">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="sidebar__logout">
                    <span>🚪</span>
                    Sign Out
                </button>
            </form>
        </div>
    </aside>

    {{-- Main Content --}}
    <div class="main">
        <header class="main__header">
            <h1>@yield('title', 'Dashboard')</h1>
            <div style="display: flex; align-items: center; gap: 14px;">
                <span class="main__header-badge">● Live & Connected</span>
            </div>
        </header>

        <div class="main__body">
            @if(session('success'))
                <div class="alert alert--success">
                    <span>✅</span> {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert--error">
                    <span>❌</span> {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert--error">
                    <span>❌</span>
                    <div>
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <!-- jQuery & DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        function toggleDropdown(id) {
            var el = document.getElementById(id);
            if (el) {
                el.classList.toggle('open');
            }
        }
    </script>

    @stack('scripts')
</body>
</html>
