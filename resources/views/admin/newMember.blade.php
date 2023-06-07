<x-admin>

    <section id="contact">
        <div class="bg-white dark:bg-gray-900">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Add New Team Members</h2>
                <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Add Trusted and New promoted Employee.</p>
                <form action="/team" method="POST" class="space-y-8">
                    @csrf
                    <div>
                        <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="name">
                            Employee Name
                        </label>
                        <input class="border border-gray-400 p-2 w-full" type="name" name="name" id="name" value="{{old('name')}}" placeholder="Your Name Put Here" required>
                        @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="title">
                            Employee Title
                        </label>
                        <input class="border border-gray-400 p-2 w-full" type="title" name="title" id="title" value="{{old('title')}}" placeholder="Title Put Here" required>
                        @error('title')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="email">
                            Employee Email
                        </label>
                        <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{old('email')}}" placeholder="Your Email Put Here" required>
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="phone">
                            Employee Phone
                        </label>
                        <input class="border border-gray-400 p-2 w-full" type="text" name="phone" id="phone" value="{{old('phone')}}" placeholder="Phone Number" required>
                        @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="address">
                            Employee Address
                        </label>
                        <input class="border border-gray-400 p-2 w-full" type="text" name="address" id="address" value="{{old('address')}}" placeholder="Address" required>
                        @error('address')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">Add Member</button>
                </form>
            </div>
        </div>
    </section>

</x-admin>