@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h2>Visitor List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>IP Address</th>
                    <th>Browser</th>
                    <th>Visited At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($visitors as $visitor)
                    <tr>
                        <td>{{ $visitor->ip_address }}</td>
                        <td>{{ $visitor->browser }}</td>
                        <td>{{ $visitor->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
