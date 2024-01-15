@extends('layouts.default')

@section('content')
    @include('partials.navbar')
    @include('components.herosection')
    <section id="portfolio" class="my-20 mt-48 py-8 px-6">
        <div class=" container my-0 mx-auto transition-all ">
            <h1 class=" text-3xl font-bold mb-10 text-[#eb4432] transition-colors duration-200">
                My projects</h1>
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-12">
                @forelse ($projects as $project)
                    <li class="rounded flex flex-col gap-2">
                        <figure
                            class="rounded transition-all duration-200 cursor-pointer drop-shadow-sm relative border-[2px] border-[#eb4432] border-dashed">
                            <a href="{{ route('project', $project) }}">
                                <img draggable="false" class="rounded drop-shadow" src="{{ $project->imageurl }}">
                                <div id="custom-hover"
                                    class="absolute top-0 left-0 opacity-0 z-[-1] transition-all duration-200 w-full h-full bg-[#5851518c]">

                                </div>
                            </a>
                        </figure>
                        <h2 class="text-xl hover:text-[#eb4432] transition-colors duration-200 cursor-pointer">
                            <a href="{{ route('project', $project) }}">{{ $project->title }}</a>
                        </h2>
                        <span class="text-base">Type: {{ $project->type->name }}</span>
                    </li>
                @empty
                    <li>No Projects found...</li>
                @endforelse
            </ul>
        </div>
    </section>
@endsection
