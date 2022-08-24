@extends('layout.main')


@section('container')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<div class="row">
    <!-- sidebar -->
    @include('layout.sidebar')
    <!-- content -->
    <div class="col-10">
        <h1><b>Presensi siswa</b></h1>
        <div class="row">
            <div class="col-8">
                <h6>Hari Senin, 22 Agustus 2022</h6>
            </div>
            <div class="col text-center border border-1 mx-5">
                <a href="/presensi_reguler" class="text-decoration-none">Reguler</a>
            </div>
            <div class="col text-center  mx-5">
                <a href="/presensi_private" class="text-decoration-none">Privat</a>
            </div>
        </div>

        <div class="card mt-5 border border-dark border-3 rounded">
            
            <form action="/presensi_reguler" method="post" class="p-5">
                <h2 class="mb-4">Reguler</h2>
                @csrf

                <h6>Nama Mentor : Rashid Adani Maulana Jatri</h6>
                <h6>Sesi : <select name="sesi" id="sesi">
                    <option value="Siang">Siang</option> 
                    <option value="Sore">Sore</option>    
                    <option value="Malam">Malam</option>       
                </select></h6>

                <h6>Jam Masuk Mentor : <input type="time"></h6>
                
               <h5 class="mt-5">Siswa</h5>
                <table class="table table-hover table-lg justify-content-center">
                    <thead>
                      <tr class="table-dark">
                        <th scope="col" style="width: 10%">No</th>
                        <th scope="col" style="width: 80%">Nama</th>
                        <th scope="col" style="width: 10%">Hadir</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td >
                            <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                            </td>
                        
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                        
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <<td>Thornton</td>
                        <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                        
                      </tr>
                    </tbody>
                  </table>

                <input type="submit">
            </form>
        </div>
    </div>
</div>
@endsection