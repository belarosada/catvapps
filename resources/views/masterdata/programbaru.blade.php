@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Program TV
@endsection
@section('link2')
    Program TV Baru
@endsection
@section('link3')
    <div class="">
        <h3 class="box-title m-t-15">Program TV</h3>
    </div>
@endsection
@section('link4')
    <div class="">
        <button type="button" onclick="history.back()" class="btn-sm bg-cyan btn-outline pull-right" style="margin-right: 5px"><i class="fa fa-backward"></i>&nbsp;Kembali</button>
    </div>
@endsection
@section('content')

    <form action="{{ url(   'masterdata/program/store') }}" class="form-horizontal">
        <div class="form-body">
            <div class="row">
                <div class="col-md-12">
                    <label class="control-label text-right col-md-3">Kode Channel</label>
                    <div class="form-group">
                        <div class="col-md-8">
                            <div class="">
                                <select id="kode_channel" name="kode_channel" class="form-control show-tick" data-live-search="true">
                                    <option value="pilih" selected disabled>Pilih</option>
                                    @foreach($kode_channel as $channel)
                                        <option value="{{$channel->id}}">{{$channel->kode_channel}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <label class="control-label text-right col-md-3">Nama Program</label>
                    <div class="form-group">
                        <div class="col-md-8">
                            <div class="form-line">
                                <input type="text" id="program" name="program" class="form-control" placeholder="Nama Program">
                            </div>
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
                        <div class="col-md-offset-1">
                            <button type="submit" class="btn btn-success">Submit</button>
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
        $('#btn_cancel').click(function(){
            $('#kode_channel').val('pilih').change()
            $('#program').val('')
        })
    </script>
    @endpush

@endsection
