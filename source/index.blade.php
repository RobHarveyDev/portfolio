@extends('_layouts.main')

@section('body')
<div class="container mx-auto px-4">
    <section id="home" class="h-[calc(100vh-5rem)]">
        <h1 class="pt-32">
            <span class="block text-gray-800 text-xl sm:text-2xl md:text-3xl lg:text-4xl">Hello I'm</span>
            <span class="py-1 block font-bold text-4xl leading-tight bg-clip-text text-transparent bg-gradient-to-br from-blue-400 to-green-600 sm:text-5xl md:text-6xl lg:text-9xl lg:py-2">Robert Harvey</span>
            <span class="block text-gray-800 text-xl sm:text-2xl md:text-3xl lg:text-4xl">A Full-Stack Web Developer based in the UK.</span>
        </h1>
    </section>

    <section id="about" class="mb-32">
        <h2 class="py-1 font-bold bg-clip-text text-transparent bg-gradient-to-br from-blue-400 to-green-600 text-2xl sm:text-3xl md:text-4xl lg:text-5xl">About Me</h2>
        <p class="my-2 text-gray-800 text-base sm:text-lg md:text-2xl lg:text-3xl">I have been working as a Web Developer for 3 years since graduating with a Bsc in Computer Science from University of Chester.</p>
        <p class="my-2 text-gray-800 text-base sm:text-lg md:text-2xl lg:text-3xl">My preferred tech stack is Laravel, Typescript, Tailwind, and Vue JS</p>
    </section>

    <section id="projects" class="mb-32">
        <h2 class="py-1 mb-2 font-bold bg-clip-text text-transparent bg-gradient-to-br from-blue-400 to-green-600 text-2xl sm:text-3xl md:text-4xl lg:text-5xl">Projects</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2">
            @foreach($projects as $project)
                <div class="rounded-lg border border-b-2 border-black p-4">
                    <div class="mb-6">
                        <div class="flex mb-2 items-center">
                            <p class="flex-grow text-xl sm:text-2xl md:text-3xl lg:text-4xl">{{ $project->title }}</p>
                            <a href="{{ $project->github }}" class="hidden sm:inline px-2 py-1 rounded-lg border border-b-4 border-black text-gray-800 hover:bg-gray-200">View on Github</a>
                            <a href="https://github.com/DrCake" target="_black" rel="noreferrer" class="inline-block sm:hidden text-black w-7 h-7 fill-current">
                                <x-icons.github></x-icons.github>
                            </a>
                        </div>
                        <p class="text-base sm:text-lg md:text-2xl lg:text-3xl">{{ $project->description  }}</p>
                    </div>

                    <div class="-ml-2 flex flex-wrap">
                        @foreach($project->getTags() as $tag)
                            <span class="ml-2 mb-2 px-2 py-1 rounded-full border border-black bg-gray-200 text-gray-800">{{ $tag }}</span>
                        @endforeach
                    </div>

                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
