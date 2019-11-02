@extends('layouts.app', ['fixed' => $slides->isNotEmpty() ])

@section('page_title', getTitle())

@section('content')
    @include('partials.app-slide')
    <main class="py-3 py-md-4">
        <div class="container">
            {{--            @include('partials.notice')--}}
            {{--            @include('partials.pushes')--}}
            <div id="articles" class="row-md list-grouped list-bordered-padding">
                @include('posts.lists.small')
            </div>
            {{ $posts->links() }}
        </div>
    </main>
    {{--    @include('components.recommended.articles')--}}
@endsection
