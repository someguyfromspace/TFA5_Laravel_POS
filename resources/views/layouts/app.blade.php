<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A simple point-of-sale administration interface built with Laravel for IT0049 TFA5.">
    <title>@yield('title', 'POS Central') | POS Central</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="app-shell">
        <aside class="sidebar">
            <a class="brand" href="{{ route('home') }}"><span class="brand-mark">P</span><span>POS<span class="brand-light">Central</span></span></a>
            <p class="nav-label">WORKSPACE</p>
            <nav class="main-nav" aria-label="Main navigation">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"><span class="nav-icon">⌂</span> Overview</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"><span class="nav-icon">ⓘ</span> About</a>
                <a href="{{ route('customers.index') }}" class="nav-link {{ request()->routeIs('customers.*') ? 'active' : '' }}"><span class="nav-icon">♙</span> Customers</a>
                <a href="{{ route('users.index') }}" class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}"><span class="nav-icon">♧</span> User Accounts</a>
            </nav>
            <div class="sidebar-bottom"><div class="side-note"><span class="status-dot"></span><div><strong>System online</strong><small>Laravel POS Foundations</small></div></div><small class="version">IT0049 · TFA5</small></div>
        </aside>
        <main class="main-content">
            <header class="topbar"><div><span class="eyebrow">POINT OF SALE MANAGEMENT</span><div class="topbar-title">@yield('heading', 'Overview')</div></div><div class="profile-chip"><span class="avatar">A</span><span><strong>Admin</strong><small>Administrator</small></span></div></header>
            <section class="page-content">@yield('content')</section>
            <footer class="footer">© {{ date('Y') }} POS Central <span>Built with Laravel · IT0049 TFA5</span></footer>
        </main>
    </div>
</body>
</html>
