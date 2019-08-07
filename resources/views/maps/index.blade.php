@extends('layouts.app')


@section('content')
<div class="container">
<div class="keterangan" style="padding: 10px;margin:10px;">
    <p>Keterangan</p>
    <div class="1" style="border-style: solid;border-width:1px;border-color:black;padding:10px">
        <img src="https://chart.googleapis.com/chart?chst=d_bubble_icon_text_small&chld=glyphish_map-marker|bb|Lancar|ADDE63|000000"
            alt="">
        <img src="https://chart.googleapis.com/chart?chst=d_bubble_icon_text_small&chld=glyphish_map-marker|bb|Sibuk|FFFF00|000000"
            alt="">
        <img src="https://chart.googleapis.com/chart?chst=d_bubble_icon_text_small&chld=glyphish_map-marker|bb|Macet|FF0000|000000"
            alt="">
    </div>
</div>
</div>
<div class="maps" style="background-color:white;padding:5px;">
    {!! $map['html'] !!}
</div>

@endsection
@push('scripts')
<script type="text/javascript">
    var centreGot = false;

</script>{!! $map['js'] !!}
@endpush
