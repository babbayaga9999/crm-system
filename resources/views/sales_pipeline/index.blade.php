@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sales Pipeline</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Lead</th>
                <th>Stage</th>
                <th>Value</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pipelines as $pipeline)
            <tr>
                <td>{{ $pipeline->lead->name }}</td>
                <td>{{ $pipeline->stage }}</td>
                <td>${{ $pipeline->value }}</td>
                <td>
                    <a href="{{ route('sales_pipeline.edit', $pipeline->id) }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
