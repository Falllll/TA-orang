</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .bg-login { color: #118ed1; }
    </style>
</head>
<body class="bg-blue-400">
    <section class="h-screen">
        <div class="px-6 h-full text-gray-800">
          <div
            class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6"
          >
            <div
              class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0"
            >
              <img
                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="w-full"
                alt="Sample image"
              />
            </div>
            <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email input -->
                <div class="mb-6">
                  <input
                    type="text"
                    class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('email') border-red-500 @enderror"
                    name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Email"
                  />
                @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                @enderror
                </div>

                <!-- Password input -->
                <div class="mb-6">
                  <input
                    type="password"
                    class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('password') border-red-500 @enderror"
                    name="password"
                    required placeholder="Masukkan Password"
                  />
                  @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex justify-between items-center mb-6">
                  <div class="form-group form-check">
                    <input
                        type="checkbox" name="remember" id="remember"
                      class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                      {{ old('remember') ? 'checked' : '' }}
                    />
                    <label class="form-check-label inline-block text-gray-800" for="exampleCheck2"
                      >Remember me</label
                    >

                  </div>
                  @if (Route::has('password.request'))
                  <a class="text-sm text-black hover:text-gray-700 whitespace-no-wrap no-underline hover:underline ml-auto"
                      href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                  </a>
              @endif
                </div>

                <div class="text-center lg:text-left">
                  <button
                    type="submit"
                    class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                  >
                    Login
                  </button>
                  @if (Route::has('register'))
                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __("Don't have an account?") }}
                            <a class="text-black hover:text-gray-700 no-underline hover:underline" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </p>
                    @endif
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
