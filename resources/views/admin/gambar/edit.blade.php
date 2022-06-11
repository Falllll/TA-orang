@extends('admin.app')
@section('title', 'Edit Gambar')
@section('content')
<main class="w-full flex-grow p-6">
    <h1 class="text-3xl text-black pb-6">Gambar</h1>

    <div class="w-full mt-12">
        <div class="w-full my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Gambar Form
            </p>
            <div class="leading-loose">
                <form class="p-10 bg-white rounded shadow-xl">
                    <div class="">
                        <label class="block text-sm text-gray-600" for="name">Gambar</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Gambar" aria-label="Name">
                    </div>
                    <div class="mt-6">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="w-full mt-12">

    </div>
</main>

@endsection