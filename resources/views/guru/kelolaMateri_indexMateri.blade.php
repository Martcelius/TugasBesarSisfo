@extends('layouts/masterGuru')

@section('title')
	{{ $title }}
@endsection

@section('content')
        <div class="container-fluid">
            <!-- File Upload | Drag & Drop OR With Click & Choose -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Index Materi
                                <small>Daftar index materi yang telah anda upload </small>
                            </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <div class="row">
                                <p class="align-right m-r-30"><a href="{{ url('guruaddmateri') }}"><button type="button" class="btn btn-success waves-effect">UPLOAD MATERI</button></a></p>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Materi</th>
                                        <th>Kelas</th>
                                        <th>Tanggal Upload</th>
                                        <th>Link</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>50001</td>
                                        <td>JAN</td>
                                        <td>100</td>
                                        <td><a href="{{url('gurukelolamateri')}}"><button type="button" class="btn btn-danger btn-xs waves-effect" onclick="return confirm('Anda yakin menghapus materi ini?');">  HAPUS  </button></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                            
                    </div>
                </div>
            </div>
            <!-- #END# File Upload | Drag & Drop OR With Click & Choose -->
           
        </div>
@endsection