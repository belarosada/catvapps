@extends('layout.layout')
@section('title')
    Transaksi
@endsection
@section('link1')
    CATV HeadEnd
@endsection
@section('link2')
    Test Result (A)
@endsection
@section('content')

    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{ url('transaksi/catv_headend/test_result/store') }}" class="form-horizontal">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="box-title m-t-15">Test Result (A)</h3>
                            </div>
                            <div class="col-md-8">
                                <button type="button" onclick="history.back()" class="btn-sm btn-success btn-outline pull-right" style="margin-right: 5px"><i class="fa fa-backward"></i>&nbsp;Kembali</button>
                            </div>
                        </div>
                        <hr class="m-t-0 m-b-40">
                        <div class="row p-t-20">
                            <div class="col-md-1">
                                <div class="form-group has-danger">
                                    <p class="control-label text-info">No</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group has-danger">
                                    <p class="control-label text-info">CATV Channel</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group has-danger">
                                    <p class="control-label text-info">Frekuensi</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group has-danger">
                                    <p class="control-label text-info">Program TV</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group has-danger">
                                    <p class="control-label text-info">HE RF Level (dBuV)</p>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <div class="form-group has-danger">
                                    <p class="control-label text-info">Level</p>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <div class="form-group has-danger">
                                    <p class="control-label text-info">CNR</p>
                                </div>
                            </div>

                        @foreach($rs as $key => $tr)
                            <div class="col-md-1">
                                <div class="form-group">
                                    <input type="text" name="id_channel[]" id="id_channel" class="form-control text-center" value="{{ $tr->id }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="text" name="kode_channel" id="kode_channel" class="form-control text-center" value="{{ $tr->kode_channel }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group has-danger">
                                    <input type="text" name="frekuensi" id="frekuensi" class="form-control" value="{{ $tr->frekuensi }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group has-danger">
                                    <input type="text" name="program" id="program" class="form-control" value="{{ $tr->program }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group has-danger">
                                    <input type="text" name="rf_level" id="rf_level" class="form-control" value="{{ $tr->rf_level }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <div class="form-group has-danger">
                                    <input type="text" name="level[]" id="level_{{$tr->id}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-1">
                                <div class="form-group has-danger">
                                    <input type="text" name="cnr[]" id="cnr_{{$tr->id}}" class="form-control">
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="button" id="btn_simpan" class="btn btn-success">Submit</button>
                                        <button type="button" id="btn_cancel" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
    $('#btn_simpan').click(function(){

        var value_tr = [];


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

            value_tr.push(data_level);

        });

        console.log(value_tr);

        /*$.ajax({
            type    : "post",
            url     : "{{url('transaksi/catv_headend/test_result/store')}}",
            dataType: "json",
    		data: {
                '_token'                : $('meta[name=csrf-token]').attr('content'),
                id_channel              : $('#id_channel').val(),
    			data_level              : JSON.stringify(value_tr),
    		},
            success: function(data) {
                location.reload();
            }
        });*/

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
        $('#nama_area').val('pilih').change()
        $('#nama_box').val('')
    })
    </script>
    @endpush
@endsection
