@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Master Data
@endsection
@section('link2')
    CATV Channel Ubah
@endsection
@section('content')

    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{ url('masterdata/catv_channel/edit') }}" class="form-horizontal">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="box-title m-t-15">Catv Channel</h3>
                            </div>
                            <div class="col-md-8">
                                <button type="button" onclick="history.back()" class="btn-sm btn-success btn-outline pull-right" style="margin-right: 5px"><i class="fa fa-backward"></i>&nbsp;Kembali</button>
                            </div>
                        </div>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" name="id" value="{{ $rs->id }}">
                                <input type="hidden" name="kode_channel_lama" value="{{ $rs->kode_channel }}">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Kode Channel</label>
                                    <div class="col-md-8">
                                        <input type="text" name="kode_channel" class="form-control" placeholder="Kode Channel" value="{{ $rs->kode_channel }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Frekuensi</label>
                                    <div class="col-md-8">
                                        <input type="text" name="frekuensi" class="form-control" placeholder="Nilai Frekuensi" value="{{ $rs->frekuensi }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">HE RF Level (dBuV)</label>
                                    <div class="col-md-8">
                                        <input type="number" name="rf_level" class="form-control" placeholder="He RF Level" value="{{ $rs->rf_level }}">
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
        $('#btn_cancel').click(function(){
            location.reload();
        })
    </script>
    @endpush

@endsection
