{{-- Message --}}
@if (Session::has('success'))

    <div class="alert alert-success d-flex align-items-center" role="alert">
        <i data-feather="alert-circle" class="mg-r-10"></i>{{ session('success') }}
    </div>


@endif

@if (Session::has('error'))

        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <i data-feather="alert-circle" class="mg-r-10"></i>{{ session('error') }}
        </div>


@endif

@if ($errors->any())
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li><i data-feather="alert-circle" class="mg-r-10"></i>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
