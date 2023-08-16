@extends('layout.app')

@section('title', 'Contact Us')

@section('content')
    <div class="flex justify-center items-center min-h-screen ">
        <div class="flex flex-col  max-w-4xl bg-white p-8 rounded-lg shadow-lg  border md:w-2/3 md:flex-row">
            <div class="flex items-center justify-center md:w-1/2 ">
                <img src="{{ asset('img/contact.png') }}" class="w-1/4 h-1/4 " alt="Contact Image"
                    class="rounded-lg shadow-lg animate-fade-in-left">
            </div>
            <div class=" px-8 mt-10  md:w-1/2">
                <h2 class="text-2xl font-semibold mb-4">Contact Us</h2>
                <form action="#">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" required name="name" id="name"
                            class="mt-1 p-2 border rounded-lg w-full">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" required name="email" id="email"
                            class="mt-1 p-2 border rounded-lg w-full">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" required id="message" rows="4" class="mt-1 p-2 border rounded-lg w-full"></textarea>
                    </div>
                    <button type="submit"
                        class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
