{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3"> Halaman Admin</h1>
        <div class="row">
            <div class="col-12">

                <div class="alert alert-warning alert-dimissible fade show">
                    100 data mahasiswa perlu diperbaiki
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <div class="alert alert-danger alert alert-dismissible fade show">
                    Hari ini deadline laporan perjalanan dinas!
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}


{{-- modifikas menggunakan component  --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3"> Halaman Admin</h1>
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
                Bulan depan cuti panjang.....
                @endcomponent
                    
            </div>
        </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}

{{-- menambahkan variabel pada component --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3"> Halaman Admin</h1>
        <div class="row">
            <div class="col-12">
                
                @component('layout.alert')
                @slot('class')
                    warning 
                @endslot
                @slot('judul')
                    Peringatan
                @endslot
                    100 data mahasiswa perlu diperbaiki
                @endcomponent

                @component('layout.alert')
                @slot('class')
                danger
                @endslot
                @slot('judul')
                    Awas
                @endslot
                    Hari ini deadline laporan perjalanan dinas!
                @endcomponent                    
            </div>
        </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}

{{-- Menulis variabel dengan menggunakan associative array --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3"> Halaman Admin</h1>
        <div class="row">
            <div class="col-12">
                
                @component('layout.alert',['class'=>'warning','judul'=>'Peringatan'])
                    100 data mahasiswa perlu diperbaiki
                @endcomponent

                @component('layout.alert',['class'=>'danger','judul'=>'Awas'])
                    Hari ini deadline laporan perjalanan dinas!
                @endcomponent       
                
                @component('layout.alert',['class'=>'success','judul'=>'Kabar Baik'])
                Bulan depan cuti panjang.....
                @endcomponent
            </div>
        </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>