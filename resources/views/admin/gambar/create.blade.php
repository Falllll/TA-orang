@extends('admin.app')
@section('title', 'Tambah Gambar')
@section('content')
<main class="w-full flex-grow p-6">
    <h1 class="text-3xl text-black pb-6">Gambar</h1>

    <div class="w-full mt-12">
        <div class="w-full my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Gambar Form
            </p>
            <div class="leading-loose">
                <form action="{{ route('admin.gambar.store') }}" class="p-10 bg-white rounded shadow-xl" method="POST">
                    @csrf
                    <div class="">
                        <label class="block text-sm text-gray-600" for="title">Judul</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title" type="text" required="" placeholder="Judul" aria-label="title">
                    </div>
                    <div class="">
                        <label class="block text-sm text-gray-600" for="content">Isi</label>
                        <textarea  class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="content" id="title" cols="" rows="5" placeholder="Isi"></textarea>
                    </div>
                    
                    <div class="grid flex justify-between grid-cols-1 gap-4 my-3">
                        <div>
                            <label class="font-bold text-lg" for="image">Gambar<span class="text-red-600">*</span></label>
                        </div>
                        <div class='flex flex-col items-center justify-center w-full'>
                            <label for="image"
                                class='flex flex-col border-4 border-dashed w-full h-46 hover:bg-gray-100 hover:border-purple-300 group'>
                                <div class='flex flex-col items-center justify-center pt-7 pb-4'>
                                    <img class="img-preview w-56 h-40 object-cover object-center border-2 border-dashed">
                                    {{-- <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg> --}}
                                    <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                        Select a photo</p>
                                </div>
                                <input id="image" value="{{old('image')}}" name="image" type='file'
                                    class="{{ $errors->has('image') ? 'is-invalid' : '' }}" />
                            </label>
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