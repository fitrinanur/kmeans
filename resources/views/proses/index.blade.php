@extends('layouts.app')

@section('content')

<head>

</head>
<div class="row justify-content-md-center">
    <h1>Klasterisasi Menggunakan K-means</h1>
</div>


<div class="card-body">
    <div class="tab-content" id="lodgingTabContent">

        <div class="card-body">
            <div class="tab-content" id="lodgingTabContent">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#inisialisasi" aria-expanded="true" aria-controls="collapseOne">
                                    Inisialisasi
                                </button>
                            </h2>
                        </div>
                        <div id="inisialisasi" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <table class="table table-bordered table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th rowspan="1">Centroid</th>
                                                    <th rowspan="1"><?php echo $variable_x; ?></th>
                                                    <th rowspan="1"><?php echo $variable_y; ?></th>
                                                    <th rowspan="1"><?php echo $variable_z; ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($centroid[0] as $key_c => $value_c)
                                                <tr>
                                                    <td>{{ ($key_c+1)  }}</td>
                                                    <td>{{ $value_c[0] }}</td>
                                                    <td>{{ $value_c[1] }}</td>
                                                    <td>{{ $value_c[2] }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-lg-5">
                                        <table class="table table-bordered table-sm table-striped">
                                            <thead>
                                                <tr>
                                                    <th rowspan="1">Data ke-i</th>
                                                    <th rowspan="1">{{ $variable_x }}</th>
                                                    <th rowspan="1">{{ $variable_y }}</th>
                                                    <th rowspan="1">{{ $variable_z }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key_c => $value_c)
                                                <tr>
                                                    <td>{{  ($key_c+1) }}</td>
                                                    <td>{{ $value_c[0] }}</td>
                                                    <td>{{ $value_c[1] }}</td>
                                                    <td>{{ $value_c[2] }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($hasil_iterasi as $key => $value)
                    <div class="card">
                        <div class="card-header" id="heading{{$key}}">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapseTwo">
                                    Iterasi {{$key+1}}
                                </button>
                            </h2>
                        </div>
                        <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{$key}}"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <h3>Iterasi ke {{ ($key+1)}}</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <table class="table table-bordered table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th rowspan="1" class="text-center">Centroid</th>
                                                    <th rowspan="1" class="text-center">{{ $variable_x }}</th>
                                                    <th rowspan="1" class="text-center">{{ $variable_y }}</th>
                                                    <th rowspan="1" class="text-center">{{ $variable_z }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($centroid[$key] as $key_c => $value_c)
                                                <tr>
                                                    <td class="text-center">{{ ($key_c+1) }}</td>
                                                    <td class="text-center">{{ $value_c[0] }}</td>
                                                    <td class="text-center">{{ $value_c[1] }}</td>
                                                    <td class="text-center">{{ $value_c[2] }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <table class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" class="text-center">Data ke i</th>
                                                <th rowspan="2" class="text-center">Nama</th>
                                                <th rowspan="2" class="text-center">{{ $variable_x }}</th>
                                                <th rowspan="2" class="text-center">{{ $variable_y }}</th>
                                                <th rowspan="2" class="text-center">{{ $variable_z }}</th>
                                                <th rowspan="1" class="text-center" colspan="{{ $cluster }} ">Jarak
                                                    ke centroid</th>
                                                <th rowspan="2" class="text-center">Jarak terdekat</th>
                                                <th rowspan="2" class="text-center">Cluster</th>
                                            </tr>
                                            <tr>

                                                @for ($i=1; $i <=$cluster ; $i++) <th rowspan="1" class="text-center">
                                                    {{ $i }}
                                                    </th>
                                                    @endfor
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($value as $key_data => $value_data)
                                            <tr>
                                                <td class="text-center">{{ $key_data+1 }} </td>
                                                <td class="text-center">{{ $name[$key_data] }}</td>
                                                <td class="text-center">{{ $value_data['data'][0] }}</td>
                                                <td class="text-center">{{ $value_data['data'][1] }}</td>
                                                <td class="text-center">{{ $value_data['data'][2] }}</td>
                                                @foreach ($value_data['jarak_ke_centroid'] as $key_jc => $value_jc)
                                                <td class="text-center">{{ $value_jc }}</td>
                                                @endforeach

                                                <td class="text-center">
                                                    {{ $value_data['jarak_terdekat']['value'] }}</td>
                                                <td class="text-center">
                                                    {{ $value_data['jarak_terdekat']['cluster'] }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var centreGot = false;

</script>
@endsection
