@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="article">
                <h1 class="article-title">{{ $article->title }}</h1>
                <div class="article-content">
                    {!! $article->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop