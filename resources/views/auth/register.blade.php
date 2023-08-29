<x-auth-layout>

    <div class="flex items-center justify-center">
        <h2 class="text-gray-500/80 font-semibold text-lg tracking-normal leading-5 text-center">Sign up to see photos
            and videos from your friends.</h2>
    </div>

    <div class="flex items-center justify-center mt-3">
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold rounded-lg p-2 w-full">
            <span class="text-base">
                <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
                <i class="fi fi-brands-facebook"></i>
            </span> Log in with Facebook
        </button>
    </div>

    <div class="flex items-center justify-center mt-3">
        <hr class="w-full h-1 my-2 bg-gray-200 border-0 rounded dark:bg-gray-700">
        <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
            <p class="text-sm font-medium text-gray-400">OR</p>
        </div>
    </div>

    <form action="{{ route('register') }}" method="post" class="space-y-2">
        {{ csrf_field() }}
        <x-text-input name="name" type="text" placeholder="Full Name" :error="$errors->first('name')"
            value="{{ old('name') }}" />
        <x-text-input name="username" type="text" placeholder="Username" :error="$errors->first('username')"
            value="{{ old('username') }}" />
        <x-text-input name="email" type="email" placeholder="Email Address" :error="$errors->first('email')"
            value="{{ old('email') }}" />
        <x-text-input name="password" type="password" placeholder="Password" :error="$errors->first('password')" />
        <x-text-input name="password_confirmation" type="password" placeholder="Re-enter Password" :error="$errors->first('password_confirmation')" />
        <x-button type="submit">
            Sign Up
        </x-button>


    </form>

    <x-slot:footer>
        <div class="border border-gray-300 py-3 mt-4 px-10">
            <p class="text-sm text-gray-900 text-center">
                Have an account?
                <a href="{{ route('login') }}" class="text-blue-500">Login</a>
            </p>
        </div>
    </x-slot:footer>


</x-auth-layout>
