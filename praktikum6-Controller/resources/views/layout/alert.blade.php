{{-- <div class="alert alert-warning alert-dismissible fade show">
    {{ $slot }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div> --}}

{{-- Component dan Slot 2 --}}
{{-- <div class="alert alert-{{ $class }} alert-dismissible fade show">
    {{ $slot }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div> --}}

{{-- Component dan slot variabel --}}
<div class="alert alert-{{ $class }} alert-dismissible fade show">
<h4 class="alert-heading"><u>{{ $judul }}</u></h4>
    {{ $slot }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>