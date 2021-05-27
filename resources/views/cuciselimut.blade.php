@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Layanan Cuci Selimut') }}</h1>

<div class="row justify-content-center">

    <div class="col-lg-8">

        <div class="card shadow mb-4">
            @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
            </div>
            <br>
            @endif
            <div class="card-profile-image mt-4">
                <img src="{{ asset('img/selimut.png') }}" class="rounded-circle" alt="user-image">
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12 mb-1">
                        <div class="text-center">
                            <h5 class="font-weight-bold">Layanan Cuci Selimut</h5>
                        </div>
                    </div>
                </div>

                <br><br>
                <div class="container">
                    <h2 align=center>Price List Cuci Selimut CleanBee</h2>
                    <p align=center>Pada layanan cuci selimut, CleanBee memberi harga terbaik untuk kamu!</p>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Tipe</th>
                                <th>Ukuran</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Karpet Rumah</td>
                                <td>per meter</td>
                                <td>Rp25.000,-</td>
                            </tr>
                            <tr>
                                <td>Karpet Masjid</td>
                                <td>per meter</td>
                                <td>Rp17.500,-</td>
                            </tr>
                            <tr>
                                <td>Karpet Kantor</td>
                                <td>per meter</td>
                                <td>Rp25.000,-</td>
                            </tr>
                            <tr>
                                <td>Seprei</td>
                                <td>120x120</td>
                                <td>Rp25.000,-</td>
                            </tr>
                            <tr>
                                <td>Karpet Kantor</td>
                                <td>160x200</td>
                                <td>Rp30.000,-</td>
                            </tr>
                            <tr>
                                <td>Selimut</td>
                                <td>per kilo</td>
                                <td>Rp15.000,-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="container">

                    <div class="row">
                        <div class="col-12 col-md-15"></div>
                        <div class="col-12 col-md-15"> <br><br><br>
                            <h2 align=center>Formulir Pemesanan</h2><br><br>


                            <form class="cuciselimut" action="{{route('post-cuciselimut')}}" method="post">
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <?php if (isset($error)) : ?>
                                    <p class="text-danger">The data is not completed!</p>
                                <?php endif; ?>

                                <div class="form-group">
                                    <label for="name">Nama:</label>
                                    <input type="text" class="form-control " id="name" placeholder="Enter Your Name" name="nname" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="nohp">No Handphone:</label>
                                    <input type="text" class="form-control " id="nohp" placeholder="Enter Your Phone Number" name="nohp" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Pengambilan:</label>
                                    <input type="text" class="form-control " id="alamat" placeholder="Enter Your Address" name="alamat" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="catatan">Catatan:</label>
                                    <input type="text" class="form-control" id="catatan" placeholder="Notes" name="catatan" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" required> I am sure the data is correct.
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                                    </label>
                                </div>
                                <div align=center;>
                                    <button align=center; type="submit" name="submit" class="btn btn-dark">Submit</button>
                                </div>

                            </form>
                            <br><br>
                        </div>
                    </div>

                </div>

            </div>

            @endsection