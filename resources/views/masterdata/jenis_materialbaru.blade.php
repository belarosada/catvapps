@extends('layout.layout')
@section('title')
    Master Data
@endsection
@section('link1')
    Master Data
@endsection
@section('link2')
    Jenis Material Baru
@endsection
@section('content')

    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{ url('masterdata/jenis_material/store') }}" class="form-horizontal">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="box-title m-t-15">Jenis Material</h3>
                            </div>
                            <div class="col-md-8">
                                <button type="button" onclick="history.back()" class="btn-sm btn-success btn-outline pull-right" style="margin-right: 5px"><i class="fa fa-backward"></i>&nbsp;Kembali</button>
                            </div>
                        </div>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Nama Material</label>
                                    <div class="col-md-8">
                                        <select id="nama_material" name="nama_material" class="form-control custom-select" style="width: 100%">
                                            <option value="pilih" disabled selected>Pilih</option>
                                            @foreach($nama_material as $material)
                                            <option value="{{$material->id}}" data-materialname="{{$material->nama_material}}">{{$material->nama_material}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Jenis Material</label>
                                    <div class="col-md-8">
                                        <input type="text" id="jenis_material" name="jenis_material" class="form-control" placeholder="Jenis Material">
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
            $('#nama_material').val('pilih').change()
            $('#jenis_material').val('')
        })
    </script>
    @endpush

@endsection
