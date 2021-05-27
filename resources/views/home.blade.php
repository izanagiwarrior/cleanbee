@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Home') }}</h1>

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
                            <p>CleanBee merupakan sebuah platform untuk mempermudah layanan laundry dengan cara yang efektif dan waktu yang efisien.</p>

                        </div>
                    </div>
                </div>
                <br><br><br>
                <h1 class="h3 mb-4 text-gray-800" align=center>Layanan</h1>
                <hr>

                <div class="row">
                
                    <div class="card-profile-image mt-4" width="30" align=center>
                        <img src="{{ asset('img/sepatu.png') }}" class="rounded-circle" alt="user-image">
                        <h5 class="font-weight-bold">Cuci Sepatu</h5>
                            <p>Jangan ragu kalau mau cuci sepatu di CleanBee karena kita bisa mencuci segala jenis sepatu mulai dari sneaker, kanvas, kulit dan lain-lain loh!</p>

                    </div>
                    
                </div>
                <hr>
                <div class="row">
                    
                    <div class="card-profile-image mt-4">
                        <img src="{{ asset('img/selimut.png') }}" class="rounded-circle" alt="user-image">
                        <h5 class="font-weight-bold">Cuci Selimut</h5>

                            <p>Walaupun namanya hanya cuci selimut, disini kamu juga bisa mencuci karpet dan seprei loh! Jadi jangan takut apabila, ada sprei dan karpetmu yang kotor :)</p>


                    </div>
                    
                  
                </div>
                <hr>
                <div class="row">
                    
                    <div class="card-profile-image mt-4">
                        <img src="{{ asset('img/pakaian.png') }}" class="rounded-circle" alt="user-image">
                        <h5 class="font-weight-bold">Cuci Pakaian</h5>
                            <p>Kamu tentunya dapat mencuci pakaian dengan bersih dan aman. Layanan cuci pakaian akan dihitung kiloan jadi lebih hemat kan ?</p>

                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="font-weight-bold">Why CleanBee?</h5>
                        <p>CleanBee memberikan kamu kemudahan dalam melakukan pemesanan.</p>
                        <p>CleanBee memungkinkan kamu untuk dapat mengetahui sampai mana cucian Anda diproses melalui fitur status pencucian.</p>
                       
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="font-weight-bold">About Us</h5>
                        <p>CleanBee merupakan jasa laundry yang telah berdiri sejak 2020. CleanBee dapat membantu anda untuk mencuci sepatu, pakaian serta selimut anda dengan waktu yang cepat dan cara yang mudah.</p>
                        
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

@endsection