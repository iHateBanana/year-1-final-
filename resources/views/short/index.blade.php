<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <p class="text-amber-600">services for short hair</p>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid">
                <div class="grid gap-10 justify-center w-90">


                    @foreach($services as $service)
                        {{--@foreach($types as $type)--}}
                        <div class="bg-white bg-clip-border text-gray-700" >
                            <div class="m-6 overflow-hidden bg-transparent bg-clip-border text-gray-700 shadow-none">
                                <img src="{{Storage::url($service->images)}}" alt="service image">
                            </div>
                            <div class="p-6">
                                <h4 class="block font-sans text-2xl font-semibold leading-snug tracking-normal text-brown-700 antialiased">
                                    <span class="text-brown-500">{{ $service->title }}</span>
                                </h4>
                                <h4 class="block font-sans text-2xl leading-snug tracking-normal text-brown-700 antialiased">
                                    <span class="text-amber-600">{{ $service->type->type }} service</span>
                                </h4>
                                {{--<p class="w-96 mt-6 ml-3 block font-sans text-xl font-normal leading-relaxed text-gray-700 antialiased">
                                    {{ $service->description}}
                                </p>--}}
                            </div>
                            <div class="flex items-center justify-between p-6">
                                <a href="{{ route('services.show', $service->id ) }}">Show this service</a>
                            </div>
                        </div>
                        {{--@endforeach--}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

