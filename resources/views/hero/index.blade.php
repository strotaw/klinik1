@extends('be.master')
@section('Hero')
  <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Hero 
                <div class="d-inline ms-5">
                <a href="{{route('hero.create')}}" class="btn btn-primary">Create
                </a>
            </div>
            </h4>             
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('hero.index') }}">Hero</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data Hero
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">   
                    <h5 class="card-title">Data Hero Di Database</h5>
                  <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th colspan="2">Judul 1</th>
                          <th>Judul 2</th>
                          <th>Judul 3</th>
                          <th>Gambar</th>
                          <th>Aktif</th>
                        </tr>
                      </thead>
                     <tbody>
@foreach ($datas as $nmr => $data)
<tr>
    <td class="text-center align-middle">{{ $nmr + 1 }}</td>
    <td class="text-center align-middle">
        <a href="{{ route('hero.create') }}" title="Ubah Data Ini!"><i class="me-2 mdi mdi-autorenew fs-2 text-warning"></i></a>
        <a href="#" title="Hapus Data Ini!"><i class="me-2 mdi mdi-delete fs-2 text-success"></i></a>
    </td>
    <td class="align-middle">{{ $data->judul1 }}</td>
    <td class="align-middle">{{ $data->judul2 }}</td>
    <td class="align-middle">{{ $data->judul3 }}</td>
    <td class="align-middle"><img class="img-thumbnail w-25" src="storage/{{ $data->url_img }}" alt="storage/{{ $data->url_img }}"></td>
    <td class="text-center align-middle"></td>
</tr>
@endforeach
 </tbody>
</table>
               
@endsection