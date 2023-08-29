<x-auth-layout>

    <form action="/login" method="post" class="space-y-2">
        {{ csrf_field() }}
      <!--  <div>
            <input
                class="w-full border border-gray-200 bg-gray-50  py-2.5 px-3 text-sm focus:border-gray-500 focus:outline-none"
                type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" />
            @error('email')
                <span class="text-red-500 text-xs flex items-center justify-center p-1"> {{ $errors->first('email') }}</span>
            @enderror
        </div>
        <div>
            <input
                class="w-full border border-gray-200 bg-gray-50  py-2.5 px-3 text-sm focus:border-gray-500 focus:outline-none"
                type="password" name="password" placeholder="Password" />
            @error('password')
                <span class="text-red-500 text-xs flex items-center justify-center p-1">
                    {{ $errors->first('password') }}</span>
            @enderror
        </div>

        <div>
            <button type="submit" class="bg-blue-400 hover:bg-blue-500 text-white text-sm rounded-lg p-2 w-full">
                Login
            </button>
        </div>
        -->

        <x-text-input 
        name="username"
        placeholder="Email Address"
        :error="$errors->first('username')"
        value="{{ old('username') }}"
        />

        <x-text-input 
        name="password"
        type="password"
        placeholder="Password"
        :error="$errors->first('password')"
        />

        <x-button type="submit">
            Login
        </x-button>


    </form>
    <x-slot:footer>
        <div class="border border-gray-300 py-3 mt-4 px-10">
            <p class="text-sm text-gray-900 text-center">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-blue-500">Sign up</a>
            </p>
        </div>
    </x-slot:footer>
</x-auth-layout>
