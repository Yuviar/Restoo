<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex m-2 p-2">
            <a href="{{ route('admin.categories.index') }}"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Back</a>
        </div>
        <div class="m-2 p-2 bg-slate-100 rounded w-full flex flex-row items-center">
            <div
                class="w-full max-w-lg hight p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 flex">
                <form method="POST" action="{{ route('admin.categories.update', $category->id) }}"
                    enctype="multipart/form-data" class="w-full mt-5">
                    @csrf
                    @method('PUT')
                    <div class="sm:col-span-6">
                        <label for="name"
                            class="text-gray-800 dark:text-gray-100 text-sm font-bold leading-tight tracking-normal mb-2">
                            Name </label>
                        <input type="text" id="name" value="{{ $category->name }}" name="name"
                            autocomplete="off"
                            class="text-gray-600 dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border shadow @error('name') border-red-400 @enderror" />
                        @error('name')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-6 pt-3">
                        <label for="image"
                            class="text-gray-800 dark:text-gray-100 text-sm font-bold leading-tight tracking-normal mb-2">
                            Image </label>
                        <div class="mt-1">
                            <input type="file" id="image" name="image"
                                class="block bg-white w-full pl-3 border-gray-300 border rounded  shadow py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 @error('image') border border-red-400 @enderror" onchange="ubah()"/>
                        </div>
                        @error('image')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-6 pt-3">
                        <label for="description"
                            class="text-gray-800 dark:text-gray-100 text-sm font-bold leading-tight tracking-normal mb-2">Description</label>
                        <div class="mt-1">
                            <textarea id="description" rows="3" name="description"
                                class="text-gray-600 dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal w-full  flex items-center pl-3 text-sm border-gray-300 rounded border shadow @error('description') border-red-400 @enderror">{{ $category->description }}</textarea>
                        </div>
                        @error('description')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-7 flex justify-end">
                        <button type="submit"
                            class="px-4 py-2 bg-sidebar nav-item first-letter: rounded-lg text-white">Store</button>
                    </div>
                </form>
            </div>
            <div class="w-72 h-72 rounded-xl mx-auto bg-white flex justify-center items-center shadow-xl">

                <img src="{{ Storage::url($category->image) }}" id="preview" alt="" class=" rounded-xl ">
            </div>
        </div>
    </div>
    {{-- @push('script')
    <script>
        function ubah() {
            debugger
            preview = document.getElementById('preview');
            preview.style.displ ay = 'block';
            const [file] = selectImage.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>
@endpush --}}
</x-admin-layout>
