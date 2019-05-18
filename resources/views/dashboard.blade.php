@extends('layouts.app')

@section('content')
    <div id="dashboardpage" data-user-id={{$userId}} data-user-name="{{$name}}">
        {{-- REACT GETS INJECTED HERE --}}
    </div>
@endsection

