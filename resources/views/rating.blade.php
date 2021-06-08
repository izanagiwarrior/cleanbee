@extends('layouts.admin')

@section('main-content')

<style>
    .rate {
        height: 50px;
        padding: 0 10px;
        width: fit-content;
    }

    .rate:not(:checked)>input {
        position: absolute;
        top: -9999px;
    }

    .rate:not(:checked)>label {
        float: right;
        width: 1.8em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ccc;
        margin: 0 15px;
    }

    .rate:not(:checked)>label:before {
        content: '★ ';
    }

    .rate>input:checked~label {
        color: #ffc700;
    }

    .rate:not(:checked)>label:hover,
    .rate:not(:checked)>label:hover~label {
        color: #deb217;
    }

    .rate>input:checked+label:hover,
    .rate>input:checked+label:hover~label,
    .rate>input:checked~label:hover,
    .rate>input:checked~label:hover~label,
    .rate>label:hover~input:checked~label {
        color: #c59b08;
    }

    .profile-img {
        border-radius: 50%;
        background-color: blue;
        width: 150px;
        height: 150px;
        position: relative;
        top: -90px;
        left: 100px;
        border: 5px solid #fff
    }
</style>

<div class="container">
    <div class="row py-4">
        <div class="col">
            <h2 class="text-danger">Your Rating Please</h2>
            <p class="text-muted">Give us your rate abous using Cleanbee.</p>

            <form action="{{ route('rating_process')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $id }}" name="id">
                <input type="hidden" value="{{ $type }}" name="type">

                <div class="rate mx-auto">
                    <input type="radio" id="star5" name="rating" value="5" />
                    <label for="star5" title="text">5</label>
                    <input type="radio" id="star4" name="rating" value="4" />
                    <label for="star4" title="text">4</label>
                    <input type="radio" id="star3" name="rating" value="3" />
                    <label for="star3" title="text">3</label>
                    <input type="radio" id="star2" name="rating" value="2" />
                    <label for="star2" title="text">2</label>
                    <input type="radio" id="star1" name="rating" value="1" />
                    <label for="star1" title="text">1</label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success my-3">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection