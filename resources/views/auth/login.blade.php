<x-base-layout>
    <h1>Alexandria University</h1>
    <div class="form-box" >
        <h2>login</h2>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="post"  action="{{ route('login') }}">
            @csrf
            <div >
                <label for="email">Email: </label>
                <br>
                <input type="email" id="email" name="email" required class="email"/>
            </div>
            <br>
            <div>
                <label for="password">Password: </label>
                <br>
                <input type="password" name="password" id="password" minlength="8"  required class="password">
               <span class="eye" onclick="myfunction()">
                <i id="hide1" class="bi bi-eye" ></i>
                <i id="hide2" class="bi bi-eye-slash" ></i>
                   </span>
            </div>
            <br>
            <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
            <!-- forget password -->
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
            <button type="submit" class="submit">Log In</button>
        </form>
    </div>
</x-base-layout>
