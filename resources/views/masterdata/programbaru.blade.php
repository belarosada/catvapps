@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Master Data
@endsection
@section('link2')
    Program Baru
@endsection
@section('content')

    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{ url('masterdata/program/store') }}" class="form-horizontal">
                    <div class="form-body">
                        <h3 class="box-title m-t-15">Program TV</h3>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Kode Channel</label>
                                    <div class="col-md-8">
                                        <select id="kode_channel" name="kode_channel" class="form-control custom-select" style="width: 100%">
                                            <option value="pilih" disabled selected>Pilih</option>
                                            @foreach($kode_channel as $channel)
                                            <option value="{{$channel->id}}" data-channelname="{{$channel->kode_channel}}">{{$channel->kode_channel}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Nama Program</label>
                                    <div class="col-md-8">
                                        <input type="text" id="program" name="program" class="form-control" placeholder="Nama Program">
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
            $('#kode_channel').val('pilih').change()
            $('#program').val('')
        })
    </script>
    @endpush

@endsection
