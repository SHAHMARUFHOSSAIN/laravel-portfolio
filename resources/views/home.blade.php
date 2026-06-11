@extends('layouts.app')

@section('title', $profile?->name ?? 'Alex Developer' . ' | ' . ($profile?->title ?? 'Full Stack Developer'))

@section('content')
    @include('components.hero')
    @include('components.info-bar')
    @include('components.about')
    @include('components.services')
    @include('components.counter')
    @include('components.experience')
    @include('components.skills')
    @include('components.projects')
    @if($posts->count() > 0)
    @include('components.blog-awards')
    @endif
    @if($testimonials->count() > 0)
    @include('components.testimonials')
    @endif
    @include('components.cta')
    @include('components.contact')
@endsection
