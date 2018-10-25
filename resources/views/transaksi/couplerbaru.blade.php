@extends('layout.layout')
@section('title')
    Transaksi
@endsection
@section('link1')
    CATV Field
@endsection
@section('link2')
    Material
@endsection
@section('content')

    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{ url('transaksi/catv_field/coupler/store') }}" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="card">
                            <div class="card-title">
                                <h4>CATV Field </h4>
                                <button type="button" onclick="history.back()" class="btn-sm btn-success btn-outline pull-right" style="margin-right: 5px"><i class="fa fa-backward"></i>&nbsp;Kembali</button>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-2">Area</label>
                                <div class="col-md-8">
                                    <select id="id_area" name="id_area" class="form-control custom-select" style="width: 100%">
                                        <option value="pilih" disabled selected>Pilih Area</option>
                                        @foreach($area as $value)
                                        <option value="{{$value->id}}" data-channelname="{{$value->nama_area}}">{{$value->nama_area}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-2">Box</label>
                                <div class="col-md-8">
                                    <select id="id_box" name="id_box" class="form-control custom-select" style="width: 100%">
                                        <option value="pilih" disabled selected>Pilih Box</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-2">Material</label>
                                <div class="col-md-8">
                                    <select id="id_material" name="id_material" class="form-control custom-select" style="width: 100%">
                                        <option value="pilih" disabled selected>Pilih Material</option>
                                        @foreach($material as $value)
                                        <option value="{{$value->id}}" data-channelname="{{$value->nama_material}}">{{$value->nama_material}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-2">Jenis Material</label>
                                <div class="col-md-8">
                                    <select id="id_jenis_material" name="id_jenis_material" class="form-control custom-select" style="width: 100%">
                                        <option value="pilih" disabled selected>Pilih Jenis Material</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-2">In/Out</label>
                                <div class="col-md-8">
                                    <select id="inout" name="inout" class="form-control custom-select" style="width: 100%">
                                        <option value="pilih" disabled selected>Pilih</option>
                                        <option value="in">In</option>
                                        <option value="out">Out</option>
                                        <option value="tap">Tap</option>
                                        <option value="pass">Pass</option>
                                    </select>
                                </div>
                            </div>
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
                                                <th class="text-left">Level</th>
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
    $('#id_area').on('change', function(){
        $.ajax({
            type    : "get",
            url     : "{{url('transaksi/catv_field/coupler/pull')}}",
            dataType: "json",
            data: {
                'id_area' : $('#id_area').val(),
                '_token' : '{{ csrf_token() }}'
            },
            success: function(data) {
                $('#id_box').empty();
                $('#id_box').append($('<option selected disabled/></option>').html('Pilih Box'));
                $.each(data, function(i, item) {
                    $('#id_box').append($('<option></option>').val(item.id).html(item.display).data('nama_box', item.nama_box));
                });
            }
        });
    });

    $('#id_material').on('change', function(){
        $.ajax({
            type    : "get",
            url     : "{{url('transaksi/catv_field/coupler/pull')}}",
            dataType: "json",
            data: {
                'id_material' : $('#id_material').val(),
                '_token' : '{{ csrf_token() }}'
            },
            success: function(data) {
                $('#id_jenis_material').empty();
                $('#id_jenis_material').append($('<option selected disabled/></option>').html('Pilih Jenis Material'));
                $.each(data, function(i, item) {
                    $('#id_jenis_material').append($('<option></option>').val(item.id).html(item.display).data('jenis_material', item.jenis_material));
                });
            }
        });
    });

    $('#btn_simpan').click(function(){

        var value_tr = [];

        $('input[id="id_channel"]').each(function(){
            var id_channel  = $(this).val();
            var id_level = 'level_'+id_channel;
            var level = $('#'+id_level).val();

            data_level      = {
                id_channel : id_channel,
                level : level,
            };

            value_tr.push(data_level);

        });

        // console.log(JSON.stringify(value_tr))

        $.ajax({
            type    : "post",
            url     : "{{url('transaksi/catv_field/coupler/store')}}",
            dataType: "json",
    		data: {
                '_token'                : $('meta[name=csrf-token]').attr('content'),
                id_area                 : $('#id_area').val(),
                id_box                  : $('#id_box').val(),
                id_material             : $('#id_material').val(),
                id_jenis_material       : $('#id_jenis_material').val(),
                inout                   : $('#inout').val(),
    			data_level              : JSON.stringify(value_tr),
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

    $('#btn_cancel').click(function(){
        location.reload()
    })
    </script>
    @endpush
@endsection
