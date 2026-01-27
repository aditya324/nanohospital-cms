@extends('layouts.app')

@section('seo_title', $blog->meta_title ?? $blog->title)
@section('seo_description', $blog->meta_description)

@section('content')

<main class="container mx-auto px-4 py-10">

    {{-- TITLE --}}
    <h1 class="text-3xl md:text-4xl font-bold text-gray-700 mb-6 text-center">
        {{ $blog->title }}
    </h1>

    {{-- FEATURED IMAGE --}}
    @if($blog->featured_image)
        <div class="mb-8 flex justify-center w-full">
            <img src="{{ asset('storage/' . $blog->featured_image) }}"
                 alt="{{ $blog->title }}"
                 class="w-1/2 h-1/2 rounded-xl shadow align-middle" />
        </div>
    @endif

    {{-- CONTENT BLOCKS --}}
    <div class="prose max-w-none">

        @foreach($blog->content_blocks ?? [] as $block)

            @switch($block['type'])

                {{-- HEADING --}}
                @case('heading')
                    <h2 class="text-2xl font-semibold text-red-700 mb-4">
                        {{ $block['data']['text'] ?? '' }}
                    </h2>
                @break

                {{-- PARAGRAPH --}}
                @case('paragraph')
                    <p class="mb-6">
                        {{ $block['data']['text'] ?? '' }}
                    </p>
                @break

                {{-- IMAGE --}}
                @case('image')
                    <div class="my-8 flex justify-center">
                        <img src="{{ asset('storage/' . ($block['data']['url'] ?? '')) }}"
                             alt="{{ $block['data']['caption'] ?? '' }}"
                             class="rounded-xl shadow max-w-full" />
                        @if(!empty($block['data']['caption']))
                            <p class="text-sm text-gray-500 mt-2 text-center">
                                {{ $block['data']['caption'] }}
                            </p>
                        @endif
                    </div>
                @break

                {{-- BULLET LIST --}}
                @case('list')
                    <ul class="list-disc pl-6 mb-8 space-y-1">
                        @foreach($block['data']['items'] ?? [] as $item)
                            <li>{{ $item['text'] ?? '' }}</li>
                        @endforeach
                    </ul>
                @break

                {{-- QUOTE --}}
                @case('quote')
                    <blockquote class="border-l-4 border-red-500 pl-4 italic text-gray-600 my-6">
                        "{{ $block['data']['text'] ?? '' }}"
                        @if(!empty($block['data']['author']))
                            <span class="block mt-2 text-sm font-semibold text-gray-500">
                                — {{ $block['data']['author'] }}
                            </span>
                        @endif
                    </blockquote>
                @break

            @endswitch

        @endforeach

    </div>

</main>

@endsection
