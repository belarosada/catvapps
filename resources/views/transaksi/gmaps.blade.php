@extends('layout.layout')
@section('title')
    Transaksi
@endsection
@section('link1')
    Gmaps
@endsection
@section('content')

<div id="gmap" style="width: 1063px; height: 400px"></div>
<div id="gmap-dropdown"></div>
<div id="controls"></div>

@push('scripts')
<script type="text/javascript">
    $(function(){
        var LocsA = [
            {
                lat: 0.113582,
                lon:  117.460672,
                title: 'Headend',
                html: '<a href="{{ url('data/headend') }}">Data Headend </a>',
                zoom: 16,
                animation: google.maps.Animation.DROP
            },
            {
                lat: 0.114350,
                lon: 117.460661,
                title: 'A-25',
                html: '',
                zoom: 16,
                animation:google.maps.Animation.DROP
            },
            {
                lat: 0.115173,
                lon: 117.460426,
                title: 'A-5',
                html: '',
                zoom: 16,
                animation:google.maps.Animation.DROP
            },
            {
                lat: 0.115973,
                lon: 117.460323,
                title: 'A-9',
                html: '',
                zoom: 16,
                animation:google.maps.Animation.DROP
            },
            {
                lat: 0.114380,
                lon: 117.457527,
                title: 'E2',
                html: '',
                zoom: 16,
                animation:google.maps.Animation.DROP
            }
        ];

        new Maplace({
            locations: LocsA,
            map_div: '#gmap',
            controls_title: 'Choose a location:',
            listeners: {
                click: function(map, event) {
                    alert('That was a click!');
                }
            },

            start: 1,
            type: ''/*'circle'*/,
            shared: {
                zoom: 16,
                html: '%index'
            }
        }).Load();

    });
    /*$(function() {
        $("#map").googleMap({
            zoom: 16
        });
        $("#map").addMarker({
            coords: [0.113582, 117.460672], // GPS coords
            title: 'HeadEnd', // Title
            text:  '<a href="{{ url('masterdata/catv_channel') }}">CATV Channel </a>' // HTML content
        });
	});*/
    /*function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });
    }
    $(document).ready(function(){
        initMap();
    });*/
</script>
@endpush

@endsection
