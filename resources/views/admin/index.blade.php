<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-amber-600 dark:text-gray-200 leading-tight">
            <p class="text-amber-600">Admin page</p>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('admin.create') }}">
            <div class="mb-6 w-1/12 p-4 bg-white dark:bg-gray-200 sm:rounded-lg">create service </div></a>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="p-6 text-gray-900 dark:text-gray-100">services table</div>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full text-left text-sm font-light">
                                        <thead class="border-b font-medium dark:border-neutral-500">
                                        <tr>
                                            <th scope="col" class="px-6 py-4">#</th>
                                            <th scope="col" class="px-6 py-4">service</th>
                                            <th scope="col" class="px-6 py-4">short title</th>
                                            <th scope="col" class="px-6 py-4">type</th>
                                            <th scope="col" class="px-6 py-4">image</th>
                                            <th scope="col" class="px-6 py-4"></th>
                                            <th scope="col" class="px-6 py-4"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($services as $service)
                                            <tr class="border-b dark:border-neutral-500">
                                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $service->id }}</td>
                                                <td class="whitespace-nowrap px-6 py-4">{{ $service->title }}</td>
                                                <td class="whitespace-nowrap px-6 py-4">{{ $service->short_title }}</td>
                                                <td class="whitespace-nowrap px-6 py-4">{{ $service->type->type }}</td>
                                                <td class="whitespace-nowrap px-6 py-4"><img class="w-10" src="{{Storage::url($service->images)}}" alt="service image"></td>
                                                <td class="whitespace-nowrap px-6 py-4"><a href="{{ route('services.edit', $service->id ) }}">Edit</a></td>
                                                <td class="whitespace-nowrap px-6 py-4">
                                                    <form class="text-red-700" action="{{route('admin.destroy', $service->id)}}" method="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" onclick="return confirm('Do you want to delete {{$service->title}} service');">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>

                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

