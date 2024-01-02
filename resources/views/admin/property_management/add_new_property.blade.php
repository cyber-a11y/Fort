@extends('layouts.app')

@section('content')
    <h2>Add New Property</h2>
    <!-- Create a form to add a new property -->
    <form method="post" action="{{ route('admin.property.store') }}">
        @csrf
        <!-- Add form fields based on your properties table structure -->
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="type">Type:</label>
        <input type="text" name="type" required>

        <label for="category">Category:</label>
        <input type="text" name="category" required>



        <button type="submit">Add Property</button>
    </form>
@endsection
