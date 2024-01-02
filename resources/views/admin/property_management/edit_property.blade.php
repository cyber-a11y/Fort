@extends('layouts.app')

@section('content')
    <h2>Edit Property Details</h2>
    <!-- Create a form to edit property details -->
    <form method="post" action="{{ route('admin.property.update', ['id' => $property->id]) }}">
        @csrf
        @method('PUT')

        <!-- Populate form fields with existing property details -->
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $property->name }}" required>

        <label for="type">Type:</label>
        <input type="text" name="type" value="{{ $property->type }}" required>

        <label for="category">Category:</label>
        <input type="text" name="category" value="{{ $property->category }}" required>



        <button type="submit">Update Property</button>
    </form>
@endsection
