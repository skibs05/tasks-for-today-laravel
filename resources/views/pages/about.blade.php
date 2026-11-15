@extends('layouts.app')
@section('title', 'About | Tasks for Today')
@section('content')
<div class="eyebrow">About the build</div><h1 class="section-title">Small system, clear purpose.</h1><div class="about-card"><p>Tasks for Today is a Laravel rebuild of a small task-management exercise. It uses migrations for the schema, Eloquent models for data access, a seeder for dependable sample records, and Blade views that share one visual language.</p><p>The dashboard keeps the focus on today's date, while the full list, profile, and about pages make the rest of the application easy to inspect. I designed the interface around warm paper tones, deep teal, and a small coral accent so it feels less like a default admin template and more like a personal workbench.</p><p class="label">Developer</p><p><strong>Thomas Pantas Esguerra</strong><br>Laravel implementation and interface design</p></div>
@endsection
