@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Master Data
@endsection
@section('link2')
    Program TV
@endsection
@section('link3')
    <div class="">
        <h3 class="">Program TV Ubah</h3>
    </div>
@endsection
@section('link4')
    <div class="">
        <button type="button" onclick="history.back()" class="btn-sm bg-cyan pull-right" style="margin-right: 5px"><i class="fa fa-backward"></i>&nbsp;Kembali</button>
    </div>
@endsection
@section('content')

    <form action="{{ url('masterdata/program/edit') }}" class="form-horizontal">
        <div class="form-body">
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="id" value="{{ $rs->id }}">
                    <input type="hidden" name="program_lama" value="{{ $rs->program }}">
                    <input type="hidden" name="kode_channel_lama" value="{{ $rs->id_channel }}">

                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Kode Channel</label>
                        <div class="col-md-8">
                            <div class="form-line">
                                <select id="kode_channel" name="kode_channel" class="form-control show-tick" data-live-search="true">
                                    @foreach($kode_channel as $channel)
                                        @if($rs->kode_channel == $channel->kode_channel)
                                            <option value="{{$channel->id}}" selected="selected">{{$channel->kode_channel}}</option>
                                        @else
                                            <option value="{{$channel->id}}">{{$channel->kode_channel}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Nama Program</label>
                        <div class="col-md-8">
                            <div class="form-line">
                                <input type="text" id="program" name="program" class="form-control" value="{{$rs->program}}">
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
                            <button type="button" id="btn_cancel" class="btn btn-warning">Cancel</button>
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
            location.reload();
        })
    </script>
    @endpush

@endsection
