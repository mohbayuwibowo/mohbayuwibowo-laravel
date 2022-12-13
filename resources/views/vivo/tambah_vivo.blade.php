@extends('admin.index')
@section('Judul','Tambah Vivo')
@section('Content')

<h1 class="mt-3">Tambah Produk Vivo</h1>

     <form method="post" action='/prosestambahvivo' enctype="multipart/form-data">
        @csrf
        <div class="mb-1 col-5">
         <label for="type" class="form-label">Type</label>
         <input class="form-control @error('type') is-invalid @enderror" id="type" placeholder="masukan type" name="type" require>
        </div>

        <div class="mb-3 col-5">
         <label for="harga" class="form-label">Harga</label>
         <input class="form-control @error('harga') is-infalid @enderror" id="harga" placeholder="masukan harga"  name="harga" require>
         </div>


        <div class="mb-3 col-5">
         <label for="spesifikasi" class="form-label">Spesifikasi</label>
         <input class="form-control @error('spesifikasi') is-infalid @enderror" id="spesifikasi" placeholder="Masukan spesifikasi"  name="spesifikasi" require>
         </div>

         <div class="form-group mb-3 col-5">
                <label for="image">Pilih Foto</label>
                <input type="file" class="form-control-file" id="image" name="image">
                </div>
            <button type="sumbit" class="btn btn-primary" style="margin-left:15px;">Tambah</button>
     </form>

        @endsection