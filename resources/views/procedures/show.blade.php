@extends('layouts.app')

@section('title', $procedure->seo_title ?? $procedure->title)
@section('meta_description', $procedure->seo_description)
@section('meta_keywords', $procedure->seo_keywords)

@section('content')
<div class="max-w-5xl mx-auto py-12 px-6">
    <h1 class="text-3xl font-bold mb-6">{{ $procedure->title }}</h1>

    <div class="prose max-w-none">
        {!! $procedure->content !!}
    </div>
</div>
@endsection
