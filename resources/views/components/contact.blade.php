<section id="contact">
    <div class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
            <form action="/" method="POST" class="space-y-8">
                @csrf
                <div>
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="name">
                        User Name
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="name" name="name" id="name" value="{{old('name')}}" placeholder="Your Name Put Here" required>
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="email">
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{old('email')}}" placeholder="Your Email Put Here" required>
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="subject">
                        Subject
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="subject" id="subject" value="{{old('subject')}}" placeholder="Your Title" required>
                    @error('subject')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label class="block mb-2 uppercase font-blod text-xs text-gray-700" for="subject">
                        Message
                    </label>
                    <textarea id="body" name="body" rows="6" class="border border-gray-400 p-2 w-full" value="{{old('body')}}" placeholder="Leave a comment..."></textarea>
                    @error('body')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">Send message</button>
            </form>
        </div>
    </div>
</section>