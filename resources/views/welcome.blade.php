@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($entries as $entry)
                <div class="card mt-2">
                    <div class="card-header">
                        {{ $entry->id}}. {{ $entry->title}}
                    </div>
                    <div class="card-body">
                        <p>{{ $entry->content}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
