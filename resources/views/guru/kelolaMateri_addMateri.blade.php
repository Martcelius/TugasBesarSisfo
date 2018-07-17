@extends('layouts/masterGuru')

@section('title')
	{{ $title }}
@endsection

@section('content')
        <div class="container-fluid">
            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Upload Materi</h2>
                            <small>upload materi berdasarkan kelasnya</small>    
                        </div>
                        <div class="body">
                            <form id="add" method="POST" action="/" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" required>
                                        <label class="form-label">Nama Materi</label>
                                    </div>
                                </div>
                                <label class="select-label" for="mapel">Kelas</label>
                                 <select class="form-control show-tick" name="mapel">
                                        <option value="">----</option>
                                        <option value="10-1">Kelas 10-1</option>
                                        <option value="10-2">Kelas 10-2</option>
                                        <option value="11-IPA">Kelas 11-IPA</option>
                                        <option value="11-IPS">Kelas 11-IPS</option>
                                        <option value="12-IPA">Kelas 12-IPA</option>
                                        <option value="12-IPS">Kelas 12-IPS</option>
                                    </select>
                                <br>
                                <br>
                                
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                               <div class="dz-message">
                                    <em>(Tipe file hanya yang berekstensi <strong>.pdf</strong> saja)</em>
                                </div>
                               <br>
                               <br>
                               <br>     
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Validation -->
            
        </div>
@endsection