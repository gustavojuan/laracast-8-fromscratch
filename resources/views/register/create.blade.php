<x-layout>
    <section class="px-6 py-8">

        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>

            <form method="POST" action="/register" class="mt-10">

                 @csrf

                <div class="mb-6">
                    <label for="name" class="block uppercase text-gray-700 text-xs font-bold mb-2">Name</label>
                    <input
                        id="name"
                        type="text"
                        class="w-full border border-gray-400 p-2"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autocomplete="name"
                        autofocus>
                </div>

                <div class="mb-6">
                    <label for="username" class="block uppercase text-gray-700 text-xs font-bold mb-2">Username</label>
                    <input
                        id="username"
                        type="text"
                        class="w-full border border-gray-400 p-2"
                        name="username"
                        value="{{ old('username') }}"
                        required
                        autocomplete="username"
                        autofocus>
                </div>

                <div class="mb-6">
                    <label for="email" class="block uppercase text-gray-700 text-xs font-bold mb-2">Email</label>
                    <input
                        id="email"
                        type="email"
                        class="w-full border border-gray-400 p-2"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        autofocus>
                </div>

                <div class="mb-6">
                    <label for="password" class="block uppercase text-gray-700 text-xs font-bold mb-2">Password</label>
                    <input
                        id="password"
                        type="password"
                        class="w-full border border-gray-400 p-2"
                        name="password"
                        value="{{ old('password') }}"
                        required
                        autocomplete="password"
                        autofocus>
                </div>

                <div class="mb-6">
                   <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                   </button>
                </div>

            </form>
        </main>
    </section>
</x-layout>
