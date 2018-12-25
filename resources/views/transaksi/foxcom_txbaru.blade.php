@extends('layout.layout')
@section('title')
    Transaksi
@endsection
@section('link1')
    CATV HeadEnd
@endsection
@section('link2')
    Baru
@endsection
@section('link3')
    <div class="">
        <h3>Foxcom Tx (C) </h3>
    </div>
@endsection
@section('link4')
    <div class="">
        <button type="button" onclick="history.back()" class="btn-sm bg-cyan btn-outline pull-right" style="margin-right: 5px"><i class="fa fa-backward"></i>&nbsp;Kembali</button>
    </div>
@endsection
@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <form action="{{ url('transaksi/catv_headend/foxcom_tx/store') }}" class="form-horizontal">
        <div class="form-body">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th >No</th>
                                    <th >CATV Channel</th>
                                    <th >Frekuensi</th>
                                    <th >Program TV</th>
                                    <th >HE RF Level (dBuV)</th>
                                    <th>Level</th>
                                    <th class="text-left">CNR</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rs as $key => $value)
                                    <tr>
                                        <th class="text-center" scope="row"><input type="text" name="id_channel[]" id="id_channel" class="form-control text-center" style="width:50px" value="{{ $value->id }}" readonly></th>
                                        <td class="text-center"><input type="text" name="kode_channel" id="kode_channel" class="form-control text-center" style="width:130px" value="{{ $value->kode_channel }}" readonly></td>
                                        <td class="text-center"><input type="text" name="frekuensi" id="frekuensi" class="form-control text-center" style="width:100px" value="{{ $value->frekuensi }}" readonly></td>
                                        <td class="color-primary text-center"><input type="text" name="program" id="program" class="form-control text-center" style="width:180px" value="{{ $value->program }}" readonly></td>
                                        <td class="text-center"><input type="text" name="rf_level" id="rf_level" class="form-control text-center" style="width:130px" value="{{ $value->rf_level }}" readonly></td>
                                        <td><input type="text" name="level[]" id="level_{{$value->id}}" class="form-control text-center" style="width:50px"></td>
                                        <td><input type="text" name="cnr[]" id="cnr_{{$value->id}}" class="form-control text-center" style="width:50px"></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-offset-1">
                            <button type="button" id="btn_simpan" class="btn btn-success">Submit</button>
                            <button type="button" id="btn_cancel" class="btn bg-orange">Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"> </div>
            </div>
        </div>
    </form>

    @push('scripts')
    <script>
    $('#btn_simpan').click(function(){

        var value_foxcom = [];


        $('input[id="id_channel"]').each(function(){
            var id_channel  = $(this).val();
            var id_level = 'level_'+id_channel;
            var level = $('#'+id_level).val();
            var id_cnr = 'cnr_'+id_channel;
            var cnr = $('#'+id_cnr).val();

            data_level      = {
                id_channel : id_channel,
                level : level,
                cnr : cnr
            };

            value_foxcom.push(data_level);

        });

        // console.log(JSON.stringify(value_tr))

        $.ajax({
            type    : "post",
            url     : "{{url('transaksi/catv_headend/foxcom_tx/store')}}",
            dataType: "json",
    		data: {
                '_token'                : $('meta[name=csrf-token]').attr('content'),
    			data_level              : JSON.stringify(value_foxcom),
    		},
            success: function(data) {
                // console.log(data);
                if (data.responses == 'OK') {
                    swal({
                            title: "Sukses",
                            text: "Data telah disimpan",
                            type: "success",
                            timer: 3000,
                            showConfirmButton: true
                        })
                        .then(function() {
                            location.reload();
                        })
                }
            }
        });

    });

    /*$('#kode_channel').on('change', function(){
        $.ajax({
            type    : "get",
            url     : "{{url('transaksi/catv_headend/test_result/pull')}}",
            dataType: "json",
    		data: {
    			'kode_channel' : $(this).val(),
    			'_token' : '{{ csrf_token() }}'
    		},
            success: function(data) {
                $('#frekuensi').val(data.frekuensi);
                $('#program').val(data.program);
                $('#rf_level').val(data.rf_level);
            }
        });
    });*/

    $('#btn_cancel').click(function(){
        location.reload()
    })
    </script>
    @endpush
@endsection
