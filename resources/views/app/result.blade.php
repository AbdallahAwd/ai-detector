@extends('layout.app')

@section('title', 'result')

@section('content')
    @php
        $ai = false;
        $label = $result[0]['label'];
        $pecentage = round($result[0]['score'] * 100);
        if ($label === 'LABEL_0') {
            $ai = true;
        }
    @endphp
    <section>
        @if ($ai)
            <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('img/rebot.png') }}" class="w-1/2 md:w-1/4" alt="">
                <h2 class="text-3xl font-medium">{{ $pecentage }}%</h2>
                <h3 class="text-xl mt-1 font-medium text-red-400">AI-GENERATED CONTENT</h3>
                <p class="mt-3 max-w-2xl text-center">Our algorithm has detected that this content appears to have been
                    generated by AI.
                    We
                    recommend making
                    improvements for a more authentic and engaging experience.</p>
            </div>
        @endif

        @if (!$ai)
            <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('img/human.png') }}" class="w-1/2 md:w-1/4" alt="">
                <h2 class="text-3xl font-medium">{{ $pecentage }}%</h2>
                <h3 class="text-xl mt-1 font-medium text-green-400">HUMAN-GENERATED CONTENT</h3>
                <p class="mt-3 max-w-2xl text-center text-gray-400">Congratulations! Our analysis indicates that this
                    content reflects the
                    authentic creativity of a human touch</p>
            </div>
        @endif

    </section>

@endsection
