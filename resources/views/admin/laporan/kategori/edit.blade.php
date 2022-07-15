@extends('admin.app')
@section('title', 'Ubah Jenis Laporan')
@section('content')
<main class="w-full flex-grow p-6">
    <h1 class="text-3xl text-black pb-6">Jenis Laporan</h1>

    <div class="w-full mt-12">
        <div class="w-full my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Jenis Pelanggaran Form
            </p>
            <div class="leading-loose">
                <form method="POST" action="{{route('admin.jenis-pelanggaran.update', $categories->id) }})}}">
                    @method('PUT')
                    @csrf
                    <div class="">
                        <label class="block text-sm text-gray-600" for="name">Jenis Pelanggran</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" type="text" required="" placeholder="Jenis Pelanggaran" aria-label="Name"
                        value="{{old('name', $categories->name)}}">
                    @if($errors->has('name'))
                        <div class="text-red-600 italic">{{ $errors->first('name') }}</div>
                    @endif
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
