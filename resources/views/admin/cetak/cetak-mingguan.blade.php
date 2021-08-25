@extends('layouts-admin/main')
@section('title', 'Cetak Mingguan')
@section('content')
   <div class="container">
    <div class="card text-center">
      <div class="card-header">
        Cetak Laporan
      </div>
      <div class="card-body">
        <h5 class="card-title">@yield('title')</h5>
        <p class="card-text">Silahkan pilih format yang diinginkan</p>
        <a href="/cetak/mingguan/cetakpdf" target="_blank" class="btn btn-primary">Download PDF</a>
        <a href="/cetak/mingguan/cetakxlsx" target="_blank" class="btn btn-primary">Download XLSX</a>
      </div>
    </div>
   </div>
@endsection