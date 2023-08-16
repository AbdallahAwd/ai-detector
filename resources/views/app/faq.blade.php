@extends('layout.app')

@section('title', 'FAQ')

@section('content')
    <div class="flex justify-center items-center min-h-screen">
        <div class=" bg-white p-8 rounded-lg shadow-lg border md:w-2/3">
            <h2 class="text-3xl font-semibold mb-6 text-center">Frequently Asked Questions</h2>

            <div class="space-y-4">
                <!-- Question 1 -->
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h3 class="text-lg font-semibold mb-2 cursor-pointer">What is CensorAI?</h3>
                    <div class="text-gray-700">
                        <p>CensorAI is an advanced AI content detection platform that helps identify and manage AI-generated
                            content.</p>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h3 class="text-lg font-semibold mb-2 cursor-pointer">How does CensorAI work?</h3>
                    <div class="text-gray-700">
                        <p>CensorAI uses state-of-the-art machine learning algorithms to analyze and detect AI-generated
                            content, providing accurate and efficient identification.</p>
                    </div>
                </div>

                <!-- Add more questions and answers as needed -->
            </div>
        </div>
    </div>

    <script>
        const accordionItems = document.querySelectorAll('.bg-gray-100');

        accordionItems.forEach(item => {
            const title = item.querySelector('h3');
            const content = item.querySelector('.text-gray-700');

            title.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        });
    </script>
@endsection
