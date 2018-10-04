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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">CATV Channel</label>
                                    <div class="col-md-8">
                                        <select id="kode_channel" name="kode_channel" class="form-control custom-select" style="width: 100%">
                                            <option value="pilih" disabled selected>Pilih</option>
                                            @foreach($catv_channel as $channel)
                                            <option value="{{$channel->id}}" data-channelname="{{$channel->kode_channel}}">{{$channel->kode_channel}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Frekuensi</label>
                                    <div class="col-md-8">
                                        <input type="text" name="frekuensi" id="frekuensi" class="form-control" readonly>
                                    </div>
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
                                        <button type="submit" class="btn btn-success">Submit</button>
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

    $('#kode_channel').on('change', function(){
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
            }
        });
    });

    $('#btn_cancel').click(function(){
        $('#nama_area').val('pilih').change()
        $('#nama_box').val('')
    })
    </script>
    @endpush
@endsection
