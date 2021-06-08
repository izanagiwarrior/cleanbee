@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800 text-center">{{ __('Order List') }}</h1>

<!-- Main Content goes here -->
<div class="container">

    <h4>Table Selimut</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">No Telpon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Catatan</th>
                <th scope="col" style="width: 20%;">Tracking</th>
                <th scope="col">Give Rating</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            ?>
            @foreach($cuciselimut as $cp)
            @if($cp -> user_id === Auth::user()->id)
            <tr>
                <th scope="row">{{$i+=1}}</th>
                <td>{{$cp -> nname}}</td>
                <td>{{$cp -> nohp}}</td>
                <td>{{$cp -> alamat}}</td>
                <td>{{$cp -> catatan}}</td>
                @if($cp -> status === "Finished")
                <td>
                    <p href="" class="btn btn-secondary">Finished</p>
                </td>
                @if(empty($cp->rating))
                <td>
                    <form action="{{ route('rating') }}" method="get">
                        @csrf
                        <input type="hidden" value="{{ $cp->id }}" name="id">
                        <input type="hidden" value="{{ 'cuciselimut' }}" name="type">
                        <button class="btn btn-primary">Rate</button>
                    </form>
                </td>
                @else
                <td>
                    <p href="" class="btn btn-secondary">Done</p>
                </td>
                @endif
                @elseif(is_null($cp -> status))
                <td>
                    <p href="" class="btn btn-success">No Status</p>
                </td>
                <td>
                    <p href="" class="btn btn-secondary">Rate</p>
                </td>
                @else
                <td>
                    <p href="" class="btn btn-success">{{$cp -> status}}</p>
                <td>
                    <p href="" class="btn btn-secondary">Rate</p>
                </td>
                </td>
                @endif
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

    <h4>Table Sepatu</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">No Telpon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Catatan</th>
                <th scope="col" style="width: 20%;">Tracking</th>
                <th scope="col">Give Rating</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            ?>
            @foreach($cucisepatu as $cp)
            @if($cp -> user_id === Auth::user()->id)
            <tr>
                <th scope="row">{{$i+=1}}</th>
                <td>{{$cp -> nname}}</td>
                <td>{{$cp -> nohp}}</td>
                <td>{{$cp -> alamat}}</td>
                <td>{{$cp -> catatan}}</td>
                @if($cp -> status === "Finished")
                <td>
                    <p href="" class="btn btn-secondary">Finished</p>
                </td>
                @if(empty($cp->rating))
                <td>
                    <form action="{{ route('rating') }}" method="get">
                        @csrf
                        <input type="hidden" value="{{ $cp->id }}" name="id">
                        <input type="hidden" value="{{ 'cuciselimut' }}" name="type">
                        <button class="btn btn-primary">Rate</button>
                    </form>
                </td>
                @else
                <td>
                    <p href="" class="btn btn-secondary">Done</p>
                </td>
                @endif
                @elseif(is_null($cp -> status))
                <td>
                    <p href="" class="btn btn-success">No Status</p>
                </td>
                <td>
                    <p href="" class="btn btn-secondary">Rate</p>
                </td>
                @else
                <td>
                    <p href="" class="btn btn-success">{{$cp -> status}}</p>
                <td>
                    <p href="" class="btn btn-secondary">Rate</p>
                </td>
                </td>
                @endif
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

    <h4>Table Pakaian</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">No Telpon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Catatan</th>
                <th scope="col" style="width: 20%;">Tracking</th>
                <th scope="col">Give Rating</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            ?>
            @foreach($cucipakaian as $cp)
            @if($cp -> user_id === Auth::user()->id)
            <tr>
                <th scope="row">{{$i+=1}}</th>
                <td>{{$cp -> nname}}</td>
                <td>{{$cp -> nohp}}</td>
                <td>{{$cp -> alamat}}</td>
                <td>{{$cp -> catatan}}</td>
                @if($cp -> status === "Finished")
                <td>
                    <p href="" class="btn btn-secondary">Finished</p>
                </td>
                @if(empty($cp->rating))
                <td>
                    <form action="{{ route('rating') }}" method="get">
                        @csrf
                        <input type="hidden" value="{{ $cp->id }}" name="id">
                        <input type="hidden" value="{{ 'cuciselimut' }}" name="type">
                        <button class="btn btn-primary">Rate</button>
                    </form>
                </td>
                @else
                <td>
                    <p href="" class="btn btn-secondary">Done</p>
                </td>
                @endif
                @elseif(is_null($cp -> status))
                <td>
                    <p href="" class="btn btn-success">No Status</p>
                </td>
                <td>
                    <p href="" class="btn btn-secondary">Rate</p>
                </td>
                @else
                <td>
                    <p href="" class="btn btn-success">{{$cp -> status}}</p>
                <td>
                    <p href="" class="btn btn-secondary">Rate</p>
                </td>
                </td>
                @endif
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

    <form action="{{route('feedback_process')}}" method="post">
        @csrf
        <h4>Feedback</h4>
        <br>
        <textarea id="w3review" name="feedback" rows="4" cols="50">
    </textarea>
        <br>
        <input type="hidden" value="{{Auth::user()->name}}" name="name">
        <button class="btn btn-primary">Submit</button>
    </form>
    <br>
    <p>Layanan Pengaduan : <a class="mb-4" href="https://wa.me/6281234567890">Click Disini</a></p>
</div>
<!-- End of Main Content -->
@endsection

@push('notif')
@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
<div class="alert alert-success border-left-success" role="alert">
    {{ session('status') }}
</div>
@endif
@endpush