@extends('layouts.app')

@section('content')
<head>

</head> 
<div class="row justify-content-md-center">
    <h1>Klasterisasi Menggunakan K-means</h1>
</div>


<div class="card-body">
    <div class="tab-content" id="lodgingTabContent">
        <div class="tab-pane fade show active" id="inisialisasi" role="tabpanel" aria-labelledby="general-tab">
            <h3>Inisialisasi Awal</h3>
            <hr>
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
        {{-- End inisialisasi --}}
        @foreach($hasil_iterasi as $key => $value)
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

                                @for ($i=1; $i <=$cluster ; $i++) <th rowspan="1" class="text-center">{{ $i }}</th>
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
        @endforeach
        <div class="maps" style="height:120%;">
            {!!  $map['html']   !!}
        </div>
        
</div>
{{-- <div class="row justify-content-md-center">
            <div id="chartContainer" style="min-width: 810px; height: 600px; max-width: 900px; margin: 0 auto"></div>
        </div> --}}
</div>
<script type="text/javascript">
    var centreGot = false;
</script>{!! $map['js'] !!}
<script type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript" src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
{{-- <script src="https://maps.googleapis.com/maps/api/js"></script> --}}


@endsection
