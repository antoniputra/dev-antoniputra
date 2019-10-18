@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="list-group">
                @forelse ($articles as $art)
                    <a href="{{ route('article.show', $art->id) }}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $art->title }}</h5>
                            <small class="text-muted">{{ $art->created_at->toFormattedDateString() }}</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">Donec id elit non mi porta.</small>
                    </a>
                @empty
                    <h4 class="text-center">There is no article yet</h4>
                @endforelse
            </div>
        </div>
    </div>
</div>
@stop