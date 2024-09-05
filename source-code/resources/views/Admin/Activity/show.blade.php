@extends('layouts.admin.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $activity->title }}</h4>
                </div>
                <div class="card-body">
                    @if ($activity->image)
                        <div class="mb-3">
                            <img src="{{ asset('images/' . $activity->image) }}" class="img-fluid" alt="{{ $activity->title }}">
                        </div>
                    @endif
                    <p><strong>Date:</strong> {{ $activity->date->format('d M Y') }}</p>
                    <p><strong>Description:</strong></p>
                    <p>{{ $activity->description }}</p>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('admin.activity.index') }}" class="btn btn-primary">Back to Activities</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
