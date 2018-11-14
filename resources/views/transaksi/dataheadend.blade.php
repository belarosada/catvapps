@extends('layout.layout')
@section('title')
    Data
@endsection
@section('link1')
    Data
@endsection
@section('link2')
    Headend
@endsection
@section('content')
    {{-- <a href="#"><img alt="..." src="{{url('assets/images/background.jpg')}}" class="center"></a> --}}
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>CATV Headend Main Splitter Performance </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>CATV Ch</th>
                                <th>Freq. (MHz)</th>
                                <th>Program TV</th>
                                <th>HE RF level (dBuV)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($a as $key => $value)
                                <tr>
                                    <td>{{$i = $key + 1}}</td>
                                    <td>{{ $value->kode_channel }}</td>
                                    <td>{{ $value->frekuensi }}</td>
                                    <td>{{ $value->program }}</td>
                                    <td>{{ $value->rf_level }}</td>
                                    <td>
                                        @if($value->kondisi == 'good')
                                            <span class="badge badge-success">Good</span>
                                        @else
                                            <span class="badge badge-danger">Bad</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>CATV Headend Falcom Tx Performance </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>CATV Ch</th>
                                <th>Freq. (MHz)</th>
                                <th>Program TV</th>
                                <th>HE RF level (dBuV)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($b as $key => $value)
                                <tr>
                                    <td>{{$i = $key + 1}}</td>
                                    <td>{{ $value->kode_channel }}</td>
                                    <td>{{ $value->frekuensi }}</td>
                                    <td>{{ $value->program }}</td>
                                    <td>{{ $value->rf_level }}</td>
                                    <td>
                                        @if($value->kondisi == 'good')
                                            <span class="badge badge-success">Good</span>
                                        @else
                                            <span class="badge badge-danger">Bad</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>CATV Headend Foxcom Tx Performance </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>CATV Ch</th>
                                <th>Freq. (MHz)</th>
                                <th>Program TV</th>
                                <th>HE RF level (dBuV)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($c as $key => $value)
                                <tr>
                                    <td>{{$i = $key + 1}}</td>
                                    <td>{{ $value->kode_channel }}</td>
                                    <td>{{ $value->frekuensi }}</td>
                                    <td>{{ $value->program }}</td>
                                    <td>{{ $value->rf_level }}</td>
                                    <td>
                                        @if($value->kondisi == 'good')
                                            <span class="badge badge-success">Good</span>
                                        @else
                                            <span class="badge badge-danger">Bad</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
