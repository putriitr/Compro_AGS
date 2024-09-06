@extends('layouts.app')

@section('content')
    <h1>{{ $meta->title }}</h1>

    <p>Start Date: {{ $meta->start_date }}</p>
    <p>End Date: {{ $meta->end_date }}</p>

    <div>
        {!! $meta->content !!}
    </div>
@endsection
