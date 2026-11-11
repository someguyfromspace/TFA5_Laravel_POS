@extends('layouts.app')
@section('title', 'Overview')
@section('heading', 'Overview')
@section('content')
<div class="welcome-row"><div><p class="eyebrow accent">YOUR BUSINESS, AT A GLANCE</p><h1>Welcome to <span>POS Central.</span></h1><p class="intro">A simple, organized space to manage your customers and system accounts.</p></div><div class="welcome-icon">▦</div></div>
<div class="section-heading"><div><h2>Workspace</h2><p>Choose a section to explore.</p></div><span class="mini-tag">4 PAGES</span></div>
<div class="feature-grid">
    <a class="feature-card" href="{{ route('customers.index') }}"><div class="feature-icon blue">♙</div><span class="card-kicker">RELATIONSHIPS</span><h3>Customer Accounts</h3><p>View customer profiles, contact details, and account status.</p><span class="card-link">View customers <b>↗</b></span></a>
    <a class="feature-card" href="{{ route('users.index') }}"><div class="feature-icon violet">♧</div><span class="card-kicker">TEAM ACCESS</span><h3>User Accounts</h3><p>Review system users, their assigned roles, and account status.</p><span class="card-link">View users <b>↗</b></span></a>
    <a class="feature-card" href="{{ route('about') }}"><div class="feature-icon amber">ⓘ</div><span class="card-kicker">THE PROJECT</span><h3>About POS Central</h3><p>Learn about this application and the Laravel structure behind it.</p><span class="card-link">Learn more <b>↗</b></span></a>
</div>
<div class="info-banner"><div class="banner-symbol">✦</div><div><strong>Simple by design. Ready to grow.</strong><p>This learning project demonstrates Laravel routes, controllers, Blade views, and temporary static data.</p></div></div>
@endsection
