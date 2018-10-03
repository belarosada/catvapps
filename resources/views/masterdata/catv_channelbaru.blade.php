@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Master Data
@endsection
@section('link2')
    CATV Channel Baru
@endsection
@section('content')

    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{ url('masterdata/catv_channel/store') }}" class="form-horizontal">
                    <div class="form-body">
                        <h3 class="box-title m-t-15">Catv Channel</h3>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Kode Channel</label>
                                    <div class="col-md-8">
                                        <input type="text" name="kode_channel" id="kode_channel" class="form-control" placeholder="Kode Channel">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Frekuensi</label>
                                    <div class="col-md-8">
                                        <input type="text" name="frekuensi" id="frekuensi" class="form-control" placeholder="Nilai Frekuensi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">HE RF Level (dBuV)</label>
                                    <div class="col-md-8">
                                        <input type="number" name="rf_level" id="rf_level" class="form-control" placeholder="He RF Level">
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
            $('#kode_channel').val('')
            $('#frekuensi').val('')
            $('#rf_level').val('')
        })
    </script>
    @endpush
@endsection




