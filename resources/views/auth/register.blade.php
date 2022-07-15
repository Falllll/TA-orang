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
    <div class="container items-center px-5 py-12 lg:px-20 ">
        <form class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 "
        method="POST"
        action="{{ route('register') }}">
        @csrf
          <div class="relative pt-4">
            <label for="nik" class="text-base leading-7 text-blueGray-500">NIK</label>
            <input type="text" id="nik" name="nik" placeholder="input NIK" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 {{ $errors->has('nik') ? 'is-invalid' : '' }}"
            value="{{old('nik')}}">
            @if($errors->has('nik'))
                <div class="text-red-600 italic">{{ $errors->first('nik') }}</div>
            @endif
          </div>
          <div class="relative pt-4">
            <label for="address" class="text-base leading-7 text-blueGray-500">Alamat</label>
            <input type="text" id="address" name="address" placeholder="input Alamat" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 {{ $errors->has('address') ? 'is-invalid' : '' }}"
            value="{{old('address')}}">
            @if($errors->has('address'))
                <div class="text-red-600 italic">{{ $errors->first('address') }}</div>
            @endif
          </div>
          <div class="relative pt-4">
            <label for="email" class="text-base leading-7 text-blueGray-500">Email</label>
            <input type="email" id="email" name="email" placeholder="input Email" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 {{ $errors->has('email') ? 'is-invalid' : '' }}"
            value="{{old('email')}}">
            @if($errors->has('email'))
                <div class="text-red-600 italic">{{ $errors->first('email') }}</div>
            @endif
          </div>
          <div class="relative pt-4">
            <label for="name" class="text-base leading-7 text-blueGray-500">Nama Lengkap</label>
            <input type="text" id="name" name="name" placeholder="input Nama Lengkap" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 {{ $errors->has('name') ? 'is-invalid' : '' }}"
            value="{{old('name')}}">
            @if($errors->has('name'))
                <div class="text-red-600 italic">{{ $errors->first('name') }}</div>
            @endif
          </div>
          <div class="relative pt-4">
            <label for="birthdate" class="text-base leading-7 text-blueGray-500">Tanggal Lahir</label>
            <input type="date" id="birthdate" name="birthdate" placeholder="Tanggal Lahir" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 {{ $errors->has('birthdate') ? 'is-invalid' : '' }}"
            value="{{old('birthdate')}}">
            @if($errors->has('birthdate'))
                <div class="text-red-600 italic">{{ $errors->first('birthdate') }}</div>
            @endif
          </div>
          <div class="relative pt-4">
            <label for="password" class="text-base leading-7 text-blueGray-500">Password</label>
            <input type="password" id="password" name="password" placeholder="input Password" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 {{ $errors->has('password') ? 'is-invalid' : '' }}"
            value="{{old('password')}}">
            @if($errors->has('password'))
                <div class="text-red-600 italic">{{ $errors->first('password') }}</div>
            @endif
          </div>
          <div class="flex items-center w-full pt-4 mb-4">
            <button type="submit" class="w-full py-3 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 "> Daftar </button>
          </div>

        </form>
      </div>
</body>
</html>
