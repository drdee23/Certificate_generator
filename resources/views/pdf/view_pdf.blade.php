<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Certificate') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    {{-- <div class="card">
        <h3 style="align-content: center;">Victor Ceaser Kwathu</h3>
        <img src="{{ asset('dummy.jpg') }}" width="100%">
        </div> --}}

                    <body>
                        <div class="container mt-4" style="max-width: 600px">
                            <h2 class="mb-5">Please upload the Certificate Design</h2>

                            <form action="{{ route('image.watermark') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <strong>{{ $message }}</strong>
                                    </div>


                                    <div class="col-md-12 mb-3 text-center">
                                        <strong style="color: green">Certificate Sample:</strong><br />
                                        <img src="/uploads/{{ Session::get('fileName') }}" width="100%" />
                                    </div>
                                @endif

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <input type="file" name="file" class="form-control" id="formFile">
                                </div>

                                <div class="d-grid mt-4">
                                    <x-button class="mt-4" type="submit" name="submit" >
                                        Upload File
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
