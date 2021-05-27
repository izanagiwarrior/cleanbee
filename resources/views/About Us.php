@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('About Us') }}</h1>

<div class="row justify-content-center">

    <div class="col-lg-8">

        <div class="card shadow mb-4">

            <div class="card-profile-image mt-4">
                <img src="{{ asset('img/mesincuci2.png') }}" class="rounded-circle" alt="user-image">
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12 mb-1">
                        <div class="text-center">
                            <h5 class="font-weight-bold">CleanBee</h5>
                            <p>Bagi mahasiswa yang sibuk saat menjalani aktivitas mereka, karena jadwal mereka sangat padat dan 
                               tugas yang menumpuk, maka dari itu mahasiswa pasti lupa akan suatu salah satunya dalam hal mencuci.
                               CleanBee merupakan website yang dibentuk untuk memenuhi kebutuhan mahasiswa dalam hal mencuci
                               sehingga mahasiswa hanya tinggal masuk ke dalam website dan memilih akan mencuci sepatu/pakaian/selimut
                               dengan cara kerja yang cukup mudah.  .</p>

                       
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

@endsection