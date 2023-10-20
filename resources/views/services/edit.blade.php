<x-app-layout>
    <div class="py-12">
        <div class="grid justify-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-300 overflow-hidden shadow-sm w-96">
                <div class="grid justify-center p-6">

                    <h2>Edit {{ $service->title }} service </h2>
                    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div>
                            <div class="py-3"><label for="title">title</label></div>
                            <input type="text" name="title" value="{{ $service->title }}">
                        </div>

                        <div>
                            <div class="py-3"><label for="short_title">short title</label></div>
                            <input type="text" name="short_title" value="{{ $service->short_title }}">
                        </div>

                        <div>
                            <div class="py-3" ><label for="description">description</label></div>
                            <textarea name="description" id="description"></textarea>
                        </div>

                        <div class="py-3"><label for="type">service type</label></div>

                        <select class="py-3" name="type_id">
                            @foreach($types as $type)
                                <option value="{{ $service->type_id }}">{{ $type->type }}</option>
                            @endforeach
                        </select>

                        <div>
                            <div class="py-3"><label for="image">image</label></div>
                            <input type="file" name="image" value="{{ $service->images }}">
                        </div>

                        <div class="py-3"> <button type="submit">submit</button></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



