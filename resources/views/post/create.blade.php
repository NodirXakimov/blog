<x-guest-layout>

    <div>
        <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
            <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
                <div class="mb-4">
                    <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                        Create Post
                    </h1>
                </div>

                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                            <svg aria-hidden="true" class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-bold">{{ $error }}</span>
                            </div>
                        </div>
                    @endforeach
                @endif

                <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        <!-- Title -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="title">
                                Title
                            </label>

                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="title" placeholder="180" />
                        </div>

                        <!-- Description -->
                        <div class="mt-4">
                            <label class="block text-sm font-bold text-gray-700" for="password">
                                Description
                            </label>
                            <textarea name="description"
                                      class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                      rows="4" placeholder="400"></textarea>
                        </div>

                        <div class="flex items-center justify-start mt-4 gap-x-2">
                            <button type="submit"
                                    class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                                Save
                            </button>
                            <a href="{{ route('posts.index') }}"
                                    class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
