@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="card">
            <div class="card-header" style="color: #636b6f;
                padding: 10 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;">
                <h3>Form Data Jalan</h3>
            </div>
            <div class="card-body" style="padding:30px">
                <form action="{{ route('road.update', $road) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="inputAddress">Nama Jalan</label>
                        <input type="text" class="form-control" id="inputName" name="name"
                        placeholder="Jl. Re Martapura" value="{{ $road->name }}">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Panjang <small>*Dalam meter</small></label>
                            <input type="text" class="form-control" id="inputEmail4" name="long" placeholder="0.28 m"
                        value="{{ $road->long }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Lebar <small>*Dalam meter</small></label>
                            <input type="text" class="form-control" id="inputPassword4" name="width" placeholder="7 m"
                        value="{{ $road->width }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Waktu</label>
                            <input type="text" class="form-control" id="inputEmail4" name="time" placeholder="0.0215"
                            value={{$road->time}}>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Tipe</label>
                            <select id="inputState" class="form-control" name="type">
                                @foreach ($types as $key => $type)
                                <option @if($road->type == $type) selected @endif value="{{$road->type}}">
                                        {{ $road->type }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Kecepatan</label>
                            <input type="text" class="form-control" id="inputEmail4" name="speed"
                                placeholder="Panjang / Waktu"
                        value="{{ $road->speed }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Aktifitas</label>
                            <input type="text" class="form-control" id="inputEmail4" name="activity"
                                placeholder="0.0215"
                        value="{{ $road->activity }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Lajur</label>
                            <input type="text" class="form-control" id="inputEmail4" name="lane" placeholder="0.0215"
                        value="{{$road->lane}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Latitude Awal</label>
                            <input type="text" class="form-control" id="inputEmail4" name="first_latitude"
                                placeholder="-7.569413"
                        value="{{$road->first_latitude}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Longitude Awal</label>
                            <input type="text" class="form-control" id="inputEmail4" name="first_longitude"
                                placeholder="110.831307"
                        value="{{$road->first_longitude}}"
                                >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Latitude Akhir</label>
                            <input type="text" class="form-control" id="inputEmail4" name="second_latitude"
                                placeholder="-7.570006"
                            value="{{$road->second_latitude}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Longitude Akhir</label>
                            <input type="text" class="form-control" id="inputEmail4" name="second_longitude"
                                placeholder="110.833212"
                                value="{{$road->second_longitude}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <a class="btn btn-dark" href="{{ route('road.index') }}" style="float: right">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
