@extends('layouts.app')
@section('title', 'Profile | Tasks for Today')
@section('content')
<div class="eyebrow">The person behind the list</div><h1 class="section-title">A little context.</h1><p class="section-sub">This page reads the single profile record seeded for the application.</p>
<div class="profile-grid"><section class="profile-card"><div class="avatar">{{ strtoupper(substr($user->full_name ?? 'U', 0, 1)) }}</div><h2>{{ $user->full_name ?? 'No profile yet' }}</h2><p>{{ '@' . ($user->username ?? 'unknown') }}</p></section><section class="info-card"><div class="info-row"><div class="label">Username</div><div class="value">{{ $user->username ?? '—' }}</div></div><div class="info-row"><div class="label">Full name</div><div class="value">{{ $user->full_name ?? '—' }}</div></div><div class="info-row"><div class="label">Email</div><div class="value">{{ $user->email ?? '—' }}</div></div></section></div>
@endsection
