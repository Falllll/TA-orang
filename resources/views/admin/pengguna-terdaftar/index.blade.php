@extends('admin.app')
@section('title', 'Laporan')
@section('content')
<main class="w-full flex-grow p-6">
    <h1 class="text-3xl text-black pb-6">Laporan</h1>

    <div class="w-full mt-12">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> Tabel Laporan
        </p>
        {{-- <div class="w-full">
            <div class="flex md:flex-row flex-col gap-y-3 min-w-full items-center justify-between bg-indigo-inventory p-3">
                <a class="py-1 px-3 text-white bg-blue-600 hover:bg-blue-900 transition delay-200"  href="#">
                    Tambah
                </a>
            </div>
        </div> --}}
        <div class="bg-white overflow-auto">
            <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead>
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light w-1/6 ">No</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light w-1/6 ">NIK</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light w-1/6">Alamat</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light w-1/6">Email</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light w-1/6">Nama Lengkap</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light w-1/6">Tanggal Lahir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $item)
                        <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $loop->iteration }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$item->nik}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$item->address}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$item->email}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$item->name}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$item->birthdate}}</td>
                        </tr>
                    @endforeach
                </tbody>
{{--

                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{$i++}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">Pelecehan</td>
                        <td class="py-4 px-6 border-b border-grey-light">Dilecehkan</td>
                        <td class="flex space-x-2 py-4 px-6 border-b border-grey-light"> --}}
                            {{-- <a href="#">
                                <div
                                    class="bg-green-500 inline-block py-1 px-2 hover:bg-green-700 text-white font-normal rounded transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </a> --}}
                            {{-- <form action="#" method="post">
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-white font-normal py-1 px-2 rounded transition duration-300"
                                    onclick="return confirm('anda yakin ingin menghapus data?');">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form> --}}
                        {{-- </td>
                    </tr> --}}


                {{-- </tbody> --}}
            </table>
        </div>
    </div>

    <div class="w-full mt-12">

    </div>
</main>

@endsection
