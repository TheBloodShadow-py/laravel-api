@extends('layouts.default')

@section('content')
    <section class="min-h-[100svh]">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16 min-h-[100svh] flex items-center justify-center ">
            <div>
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update profile</h2>
                <form method="POST" action="{{ route('create') }}">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                        <div class="sm:col-span-2">
                            <form>
                                <label for="title"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project
                                    title</label>
                                <input type="text" name="title" id="title"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    value="" placeholder="Type title" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="imageurl"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">imageurl</label>
                            <input type="text" name="imageurl" id="imageurl"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="" placeholder="imageurl" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="imageurl"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Technologies</label>

                            <div class="flex gap-4 items-center flex-wrap mb-5">

                                @foreach ($technologies as $technology)
                                    <input name="technologies[]" class="text-sm font-medium" type="checkbox"
                                        value="{{ $technology->id }}" id="technology-{{ $technology->id }}"
                                        @checked(in_array($technology->id, old('technologies', [])))>
                                    <label class="text-sm font-medium text-white" for="technology-{{ $technology->id }}">
                                        {{ $technology->name }}
                                    </label>
                                @endforeach



                            </div>
                        </div>
                        <div class="w-full">
                            <label for="mainlanguage"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Main
                                language</label>
                            <input type="text" name="mainlanguage" id="mainlanguage"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="" placeholder="Main language" required="">
                        </div>
                        <div class="w-full">
                            <label for="stars"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stars</label>
                            <input type="number" name="stars" id="stars"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="" placeholder="5" required="" min="0" max="5">
                        </div>
                        <div>
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Types</label>
                            <select id="type_id" name="type_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}"> {{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" rows="8" name="description"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Write a project description here..."></textarea>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit"
                            class="text-white bg-green-500 hover:bg-green-600 transition-colors duration-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Create project
                        </button>

                </form>
            </div>
            </form>
        </div>

        </div>
    </section>
@endsection
