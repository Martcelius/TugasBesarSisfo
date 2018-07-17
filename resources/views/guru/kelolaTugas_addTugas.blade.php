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
                            <h2>Upload Tugas</h2>
                            <small>Upload tugas berdasarkan kelasnya</small>    
                        </div>
                        <div class="body">
                            <form id="add" method="POST" action="/" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" required>
                                        <label class="form-label">Nama Tugas</label>
                                    </div>
                                </div>
                                
                                <br>

                                 <!--DateTime Picker -->
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                    <strong>Waktu Mulai</strong>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                    <strong>Waktu Selesai</strong>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--#END# DateTime Picker -->

                                
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
