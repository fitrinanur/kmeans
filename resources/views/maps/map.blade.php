@extends('layouts.app')

@section('content')
        <div class="maps" style="background-color:white;padding:10px;">
                {!! $map['html'] !!}
        </div>
@endsection
@push('scripts')
<script type="text/javascript">
    // var centreGot = false;
 
</script>
   {!! $map['js'] !!}
@endpush