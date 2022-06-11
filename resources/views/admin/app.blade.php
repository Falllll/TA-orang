@include('layout.admin.header')
<body class="bg-gray-100 font-family-karla flex">
    @include('layout.admin.sidebar')
    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        @include('layout.admin.topbar')
        @include('layout.admin.topbarMobile')
        <div class="w-full overflow-x-hidden border-t flex flex-col">
            @yield('content')
            @include('layout.admin.footer')
        </div>
    </div>
    @include('layout.admin.script')
</body>
</html>