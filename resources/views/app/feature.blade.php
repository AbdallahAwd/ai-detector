@extends('layout.app')

@section('title', 'Features')

@section('content')

    <section class="mt-10">
        <h1 class="text-3xl font-medium">Features</h1>
        <div>
            @foreach ($features as $feature)
                <div class="mt-8">
                    <h2 class="text-white bg-gray-800 p-5 text-3xl font-medium rounded-t-2xl">{{ $feature['title'] }}</h2>
                    <p class="p-5 bg-gray-300 rounded-b-2xl">
                        {{ $feature['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </section>
@endsection
