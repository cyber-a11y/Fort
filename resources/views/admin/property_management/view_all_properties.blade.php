@extends('layouts.app')

@section('content')
    <h2>View All Properties</h2>
    <!-- Display a table of all properties from the database -->
    <!-- Iterate through properties and display relevant information -->
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Category</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through properties -->

            @foreach($properties as $property)
                <tr>
                    <td>{{ $property->name }}</td>
                    <td>{{ $property->type }}</td>
                    <td>{{ $property->category }}</td>


                    <td>
                        <!-- Link to view property details -->
                        <a href="{{ route('admin.property.details', ['id' => $property->id]) }}">View Details</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
