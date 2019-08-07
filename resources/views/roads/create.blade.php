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
            <div class="card-body" style="padding:40px">
                <form action="{{ route('road.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputAddress">Nama Jalan</label>
                        <input type="text" class="form-control" id="inputName" name="name"
                            placeholder="Jl. Re Martapura">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Panjang <small>*Dalam meter</small></label>
                            <input type="text" class="form-control" id="inputEmail4" name="long" placeholder="0.28">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Lebar <small>*Dalam meter</small></label>
                            <input type="text" class="form-control" id="inputPassword4" name="width"
                                placeholder="7">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Waktu</label>
                            <input type="text" class="form-control" id="inputEmail4" name="time" placeholder="0.0215">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Tipe</label>
                            <select id="inputState" class="form-control" name="type">
                                @foreach ($types as $key => $type)
                                    <option value="{{ $type }}" @if (old('type')==$type)
                                            selected @endif>{{ $type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Kecepatan</label>
                            <input type="text" class="form-control" id="inputEmail4" name="speed"
                                placeholder="Panjang / Waktu">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputState">Aktifitas</label>
                            <select id="inputState" class="form-control" name="activity">
                                @foreach ($activities as $key => $activity)
                                    <option value="{{$activity}}">
                                        {{ $activity }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputState">Lajur</label>
                            <select id="inputState" class="form-control" name="lane">
                                @foreach ($lanes as $key => $lane)
                                    <option value="{{ $lane }}" @if (old('lane')==$lane)
                                            selected @endif>{{ $key }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Latitude Awal</label>
                            <input type="text" class="form-control" id="inputEmail4" name="first_latitude"
                                placeholder="-7.569413">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Longitude Awal</label>
                            <input type="text" class="form-control" id="inputEmail4" name="first_longitude"
                                placeholder="110.831307">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Latitude Tengah 1</label>
                            <input type="text" class="form-control" id="inputEmail4" name="middle_latitude_1"
                                placeholder="-7.569413">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Longitude Tengah 1</label>
                            <input type="text" class="form-control" id="inputEmail4" name="middle_longitude_1"
                                placeholder="110.831307">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Latitude Tengah 2</label>
                            <input type="text" class="form-control" id="inputEmail4" name="middle_latitude_2"
                                placeholder="-7.569413">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Longitude Tengah 2</label>
                            <input type="text" class="form-control" id="inputEmail4" name="middle_longitude_2"
                                placeholder="110.831307">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Latitude Akhir</label>
                            <input type="text" class="form-control" id="inputEmail4" name="second_latitude"
                                placeholder="-7.570006">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Longitude Akhir</label>
                            <input type="text" class="form-control" id="inputEmail4" name="second_longitude"
                                placeholder="110.833212">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush
