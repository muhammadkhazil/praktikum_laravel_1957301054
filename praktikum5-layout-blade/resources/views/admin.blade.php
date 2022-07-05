{{-- admin 1 --}}
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Halaman Admin</h1>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-warning alert-dismissible fade show">
                    100 data mahasiswa perlu diperbaiki
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <div class="alert alert-danger alert-dismissible fade show">
                    Hari ini deadline laporan perjalanan dinas!
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html> --}}

{{-- admin 2 --}}
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Halaman Admin</h1>
        <div class="row">
            <div class="col-12">
                @component('layout.alert')
                    100 data mahasiswa perlu diperbaiki
                @endcomponent
                @component('layout.alert')
                    Hari ini deadline laporan perjalanan dinas!
                @endcomponent
            </div>
        </div>
    </div>
    ...

</html> --}}

{{-- admin 3 --}}
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Halaman Admin</h1>
        <div class="row">
            <div class="col-12">
                @component('layout.alert')
                    @slot('class')
                        warning
                    @endslot
                    100 data mahasiswa perlu diperbaiki
                @endcomponent
                @component('layout.alert')
                    @slot('class')
                        danger
                    @endslot
                    Hari ini deadline laporan perjalanan dinas!
                @endcomponent
                @component('layout.alert')
                    @slot('class')
                        success
                    @endslot
                    Bulan depan cuti panjang...
                @endcomponent
            </div>
        </div>
    </div>
    ...
</html> --}}

{{-- admin 4 --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Halaman Admin</h1>
        <div class="row">
            <div class="col-12">
                @component('layout.alert', ['class' => 'warning', 'judul' => 'Peringatan'])
                    100 data mahasiswa perlu diperbaiki
                @endcomponent
                @component('layout.alert', ['class' => 'danger', 'judul' => 'Awas'])
                    Hari ini deadline laporan perjalanan dinas!
                @endcomponent
                @component('layout.alert', ['class' => 'success', 'judul' => 'Kabar Baik'])
                    15 Bulan depan cuti panjang...
                @endcomponent
            </div>
        </div>
    </div>
    ...

</html>
