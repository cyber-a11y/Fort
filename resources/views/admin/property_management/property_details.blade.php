@extends('layouts.app')

@section('content')
    <h2>Property Details</h2>
    <!-- Display details of a specific property -->
    <ul>
        <li><strong>Name:</strong> {{ $property->name }}</li>
        <li><strong>Type:</strong> {{ $property->type }}</li>
        <li><strong>Category:</strong> {{ $property->category }}</li>



        <li><strong>Description:</strong> {{ $property->description }}</li>
        <li><strong>Location:</strong> {{ $property->location }}</li>
        <li><strong>Size:</strong> {{ $property->size }} sq ft</li>
        <li><strong>Bedrooms:</strong> {{ $property->bedrooms }}</li>
        <li><strong>Bathrooms:</strong> {{ $property->bathrooms }}</li>
        <li><strong>Status:</strong> {{ $property->status }}</li>
        <li><strong>Price:</strong> ${{ $property->price }}</li>

        <!-- Display property images-->

        @if(count($property->images) > 0)
            <li><strong>Images:</strong>
                <ul>
                    @foreach($property->images as $image)
                        <li><img src="{{ $image->image_url }}" alt="Property Image"></li>
                    @endforeach
                </ul>
            </li>
        @endif

        <!-- Display property documents-->

        @if(count($property->documents) > 0)
            <li><strong>Documents:</strong>
                <ul>
                    @foreach($property->documents as $document)
                        <li><a href="{{ $document->document_url }}" target="_blank">{{ $document->document_type }}</a></li>
                    @endforeach
                </ul>
            </li>
        @endif
    </ul>
@endsection
