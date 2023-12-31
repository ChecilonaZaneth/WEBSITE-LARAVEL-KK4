@extends('layouts.main')

@section('container')
    <div clas="title-top mb-5">
        <h2 class="fw-bold">Contact Us</h2>
    </div>
    <form method="post" action="{{route('contacts.store')}}">
    {{csrf_field()}}   
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputname" placehorder="Nama" name="nama">
        <label for="inputname">Nama</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputemail" placehorder="Email" name="email">
        <label for="inputemail" class="form-label">Email</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placehorder="Tinggalkan pesan disini!" id="floatingTextarea2" style="height: 100px;" name="pesan"></textarea>
        <label for="floatingTextarea2">Pesan</label>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

@endsection