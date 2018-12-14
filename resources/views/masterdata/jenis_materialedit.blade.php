@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Jenis Material
@endsection
@section('link2')
    Ubah
@endsection
@section('link3')
    <h3 class="">Jenis Material</h3>
@endsection
@section('link4')
    <div class="">
        <button type="button" onclick="history.back()" class="btn-sm bg-cyan pull-right" style="margin-right: 5px"><i class="fa fa-backward"></i>&nbsp;Kembali</button>
    </div>
@endsection
@section('content')

    <form action="{{ url('masterdata/jenis_material/edit') }}" class="form-horizontal">
        <div class="form-body">
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="id" value="{{ $rs->id }}">
                    <input type="hidden" name="jenis_material_lama" value="{{ $rs->jenis_material }}">
                    <input type="hidden" name="nama_material_lama" value="{{ $rs->id_material }}">

                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Nama Material</label>
                        <div class="col-md-8">
                            <select id="nama_material" name="nama_material" class="form-control custom-select" style="width: 100%">
                                @foreach($nama_material as $material)
                                    @if($rs->nama_material == $material->nama_material)
                                        <option value="{{$material->id}}" selected="selected">{{$material->nama_material}}</option>
                                    @else
                                        <option value="{{$material->id}}">{{$material->nama_material}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Jenis Material</label>
                        <div class="col-md-8">
                            <input type="text" id="jenis_material" name="jenis_material" class="form-control" value="{{$rs->jenis_material}}">
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
            location.reload();
        })
    </script>
    @endpush

@endsection
