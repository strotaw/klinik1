@extends('be.master')
@section('Hero')
  <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Hero 
            </div>
            </h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('hero.index') }}">Hero</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Edit Data Hero
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>

    <div class="container-fluid">
        <Form action="{{ route('hero.update', $data) }}" method="POST" id="frmHero" enctype="multipart/form-data">
         @method('PUT')
         @csrf
         <div class="row">    
            <div class="col-12">
              <div class="card bg-warning">
                <div class="card-body">   
                    <h5 class="card-title mb-5">Form Edit Data Hero</h5>
                <div class="mb-3 row">
                    <label for="judul1" class="col-sm-2 col-form-label">Judul 1</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="judul1" name="judul1" placeholder="Judul 1" value="{{$data->judul1}}" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="judul2" class="col-sm-2 col-form-label">Judul 2</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="judul2" name="judul2" placeholder="Judul 2" value="{{$data->judul2}}"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="judul3" class="col-sm-2 col-form-label">Judul 3</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="judul3" name="judul3" placeholder="Judul 3" value="{{$data->judul3}}" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="url_img" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-6">
                      <input type="file" class="form-control" id="url_img" name="url_img" placeholder="Gambar" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="aktif" class="col-sm-2 col-form-label">Tampilkan</label>
                    <div class="col-sm-6">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="aktif" name="aktif"
                        @if ($data->aktif == 1)
                            checked @endif>
                        <label class="form-check-label" for="aktif" id="lblAktif"></label>
                      </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-7 text-end">
                        <a href="{{ route('hero.index') }}" class="btn btn-secondary text-white me-3">Batal</a>
                        <button type="submit" id="btnSimpan" class="btn btn-success text-white">Simpan</button>
                    </div>
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
        </Form>
    </div>

    <script>
        const btnSave = document.getElementById('btnSimpan');
        const judul1 = document.getElementById('judul1');
        const judul2 = document.getElementById('judul2');
        const judul3 = document.getElementById('judul3');
        const url_img = document.getElementById('url_img');
        const form = document.getElementById('frmHero');
        const pesan = document.getElementById('pesan');
        const body = document.querySelector('body');
        const lblAktif = document.getElementById('lblAktif');
        const aktif = document.getElementById('aktif');

        function checkbox() {
            if (aktif.checked == true) {
                //aktif.value = 1;
                lblAktif.innerHTML = 'Aktif';
            } else {
                //aktif.value = 0;
                lblAktif.innerHTML = 'Tidak';
            }
        }

        aktif.onclick = function() {
            checkbox();
        }

        function simpan() {
            if (judul1.value === '') {
                judul1.focus()
                swal("Invalid Data!", "Judul 1 must filled", "error")
            } else if (judul2.value === '') {
                judul2.focus()
                swal("Invalid Data!", "Judul 2 must filled", "error")
            } else if (judul3.value === ''){
                judul3.focus()
                swal("Invalid Data!", "Judul 3 must filled", "error")
            } else if (url_img.value === ''){
                url_img.focus()
                swal("Invalid Data!", "Background must filled", "error")
            } else {
                form.submit()
            }
        }

        btnSave.onclick = function(){
            simpan()
        }

        body.onload = function() {
            checkbox()
        }
    </script>
                    
@endsection