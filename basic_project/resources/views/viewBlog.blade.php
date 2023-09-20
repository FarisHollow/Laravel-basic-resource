@extends('Layout.layout')

@section('title', 'Search Results')

@section('content')
    <div class="container mx-auto px-4 py-10">
        @if(count($bloggers) > 0)
        @foreach($bloggers as $blogger)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden flex mb-6">
            <img class="quote-boxed-image" src="{{ asset('storage/' . $blogger->image) }}" alt="{{ $blogger->name }}" />
            <div class="p-6 w-1/2">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $blogger->name }}</h2>
                <p class="text-sm text-blue-500 mb-2">
                    Posted on {{ $blogger->created_at->format('M d, Y') }}
                </p>
                <p class="text-gray-600">{{ $blogger->designation }}</p>
                <p class="mt-4">{{ $blogger->blog }}</p>
            </div>
        </div>
        @endforeach
        @else
        <h1 class="text-2xl text-red-500 mt-4">No Blogs Found.</h1>
        @endif
    </div>
@endsection
