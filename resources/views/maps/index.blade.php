@extends('layouts.app')


@section('content')
<div class="container">
    <div class="keterangan" style="padding: 10px;margin:5px;">
        <p>Keterangan</p>
        <div class="1" style="border-style: solid;border-width:1px;border-color:black;padding:10px">
            <a type="button" data-toggle="modal" data-target="#lancarmodal"><img
                    src="https://chart.googleapis.com/chart?chst=d_bubble_icon_text_small&chld=glyphish_map-marker|bb|Lancar|ADDE63|000000"
                    alt=""></a>
            <a type="button" data-toggle="modal" data-target="#sibukmodal"><img src="https://chart.googleapis.com/chart?chst=d_bubble_icon_text_small&chld=glyphish_map-marker|bb|Sibuk|FFFF00|000000"
                alt=""></a>
            <a type="button" data-toggle="modal" data-target="#macetmodal"><img src="https://chart.googleapis.com/chart?chst=d_bubble_icon_text_small&chld=glyphish_map-marker|bb|Macet|FF0000|000000"
                alt=""></a>
        </div>
    </div>
</div>
<div class="maps" style="background-color:white;padding:5px;">
    {!! $map['html'] !!}
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="lancarmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Daftar Jalan</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="modal-body">
                <p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Jalan</th>
                                <th>Kategori </th>
                            </tr>
                        </thead>
                        @foreach ($maps as $key => $val)
                        @if($val['cluster'] == 1)
                        <tr>
                            <td>{{(($key++)+1)}}</td>
                            <td>{{$val['name']}}</td>
                            <td>Lancar</td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="sibukmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Daftar Jalan</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
            </div>
            <div class="modal-body">
                <p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Jalan</th>
                                <th>Kategori </th>
                            </tr>
                        </thead>
                        @foreach ($maps as $key => $val)
                        @if($val['cluster'] == 2)
                        <tr>
                            <td>{{(($key++)+1)}}</td>
                            <td>{{$val['name']}}</td>
                            <td>Sibuk</td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="macetmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Daftar Jalan</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> --}}
                </div>
                <div class="modal-body">
                    <p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Jalan</th>
                                    <th>Kategori </th>
                                </tr>
                            </thead>
                            @foreach ($maps as $key => $val)
                            @if($val['cluster'] == 3)
                            <tr>
                                <td>{{(($key++)+1)}}</td>
                                <td>{{$val['name']}}</td>
                                <td>Macet</td>
                            </tr>
                            @endif
                            @endforeach
                        </table>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script type="text/javascript">
    var centreGot = false;

</script>{!! $map['js'] !!}
@endpush
