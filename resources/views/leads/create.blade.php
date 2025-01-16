{{-- resources/views/leads/create.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a New Lead</h1>

    <form action="{{ route('leads.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Lead Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Lead Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save Lead</button>
        </div>
    </form>
</div>
@endsection
