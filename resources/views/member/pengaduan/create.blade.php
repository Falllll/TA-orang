<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Pengaduan</title>
        <meta name="author" content="David Grzyb">
        <meta name="description" content="">

        <!-- Tailwind -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
            .font-family-karla { font-family: karla; }
            .bg-sidebar { background: #30b39f; }
            .cta-btn { color: #138a78; }
            .upgrade-btn { background: #033830; }
            .upgrade-btn:hover { background: #044a40; }
            .active-nav-link { background: #033830; }
            .nav-item:hover { background: #044a40; }
            .nav-item2:hover { background: #32fab1; }
            .account-link:hover { background: #138a78; }

            @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
            .font-family-karla { font-family: karla; }
            /* .bg-sidebar { background: #3d68ff; }
            .cta-btn { color: #3d68ff; }
            .active-nav-link { background: #1947ee; }
            .nav-item:hover { background: #1947ee; }
            .account-link:hover { background: #3d68ff; } */
            .dropdown:hover .dropdown-menu {
                display: block;
            }
            .tab {
                overflow: hidden;
                }
                .tab-content {
                max-height: 0;
                transition: all 0.5s;
                }
                input:checked + .tab-label .test {
                    background-color: #000;
                }
                input:checked + .tab-label .test svg {
                    transform: rotate(180deg);
                    stroke: #fff;
                }
                input:checked + .tab-label::after {
                transform: rotate(90deg);
                }
                input:checked ~ .tab-content {
                max-height: 100vh;
                }
        </style>
    </head>
<body>
    <main class="w-full flex-grow p-6 bg-blue-500">
        <a href="{{route('home')}}" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Kembali Halaman Awal
          </a >

        <div class="w-full mt-12">
            <div class="w-full my-6 pr-0 lg:pr-2">
                <p class="mt-8 text-xl pb-1 pt-3 flex items-center bg-white">
                    <i class="ml-5 fas fa-list mr-3 bg-white"></i> Pengaduan   Form
                </p>
                <div class="leading-loose">
                    <form action="{{route('member.pengaduan.store')}}" class="p-4 bg-white rounded shadow-xl" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                            <label class="block text-sm text-gray-600" for="title">Jenis Pengaduan</label>
                            <select name="jenis_pengaduan_id" id="jenis_pengaduan_id" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
                                <option value="">Pilih Jenis Pengaduan</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="">
                            <label class="block text-sm text-gray-600" for="isi">Kronologi</label>
                            <textarea  class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="isi" id="title" cols="" rows="5" placeholder="Isi"></textarea>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Adukan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="w-full mt-12">

        </div>
    </main>

</body>
</html>
