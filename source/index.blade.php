@extends('_layouts.main')

@section('body')
<div class="container mx-auto px-4">
    <section id="home" class="h-[calc(100vh-5rem)]">
        <h1 class="pt-32">
            <span class="block -mb-5 text-4xl text-gray-800">Hello I'm</span>
            <span class="block font-bold text-9xl bg-clip-text text-transparent bg-gradient-to-br from-blue-400 to-green-600 leading-relaxed">Robert Harvey</span>
            <span class="-mt-5 block text-4xl text-gray-800">A Full-Stack Web Developer based in the UK.</span>
        </h1>
    </section>

    <section id="about" class="mb-32">
        <h2 class="font-bold text-5xl bg-clip-text text-transparent bg-gradient-to-br from-blue-400 to-green-600 leading-relaxed">About Me</h2>
        <p class="text-gray-800 text-3xl">I have been working as a Web Developer for 3 years since graduating with a Bsc in Computer Science from University of Chester.</p>
        <p class="text-gray-800 text-3xl">My preferred tech stack is Laravel, Typescript, Tailwind, and Vue JS</p>
    </section>

    <section id="projects" class="mb-32">
        <h2 class="font-bold text-5xl bg-clip-text text-transparent bg-gradient-to-br from-blue-400 to-green-600 leading-relaxed">Projects</h2>
        <div class="grid grid-cols-2">
            @foreach($projects as $project)
                <div class="rounded-lg border border-b-2 border-black p-4">
                    <div class="mb-6">
                        <div class="flex mb-2 items-center">
                            <p class="text-3xl flex-grow">{{ $project->title  }}</p>
                            <a href="{{ $project->github }}" class="px-2 py-1 rounded-lg border border-b-4 border-black hover:bg-gray-200 text-gray-800">View on Github</a>
                        </div>
                        <p class="text-xl">{{ $project->description  }}</p>
                    </div>

                    <div class="space-x-3">
                        @foreach($project->getTags() as $tag)
                            <span class="px-2 py-1 rounded-full border border-black bg-gray-200 text-gray-800">{{ $tag }}</span>
                        @endforeach
                    </div>

                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
