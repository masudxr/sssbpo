<x-admin>
    <section>
        <div class="bg-white dark:bg-gray-900">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Update Members Details</h2>
                <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Add Trusted and New promoted Employee.</p>
                @foreach($members as $member)
                <form action="edit" method="POST" class="space-y-8">
                    @csrf
                    <input type="hidden" name="id" value="{{$member->id}}">
                    <div>
                        <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="name">
                            Employee Name
                        </label>
                        <input class="border border-gray-400 p-2 w-full" type="name" name="name" id="name" value="{{$member->name}}">
                        @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="title">
                            Employee Title
                        </label>
                        <input class="border border-gray-400 p-2 w-full" type="title" name="title" id="title" value="{{$member->title}}">
                        @error('title')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="email">
                            Employee Email
                        </label>
                        <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{$member->email}}">
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="phone">
                            Employee Phone
                        </label>
                        <input class="border border-gray-400 p-2 w-full" type="text" name="phone" id="phone" value="{{$member->phone}}">
                        @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="address">
                            Employee Address
                        </label>
                        <input class="border border-gray-400 p-2 w-full" type="text" name="address" id="address" value="{{$member->address}}">
                        @error('address')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">Update Data</button>
                </form>
                @endforeach
            </div>
        </div>
    </section>

</x-admin>