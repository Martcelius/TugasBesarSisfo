@extends('layouts/masterSiswa')

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
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Materi</th>
                                        <th>Tanggal Upload</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>JAN</td>
                                        <td><a href="{{url('gurukelolamateri')}}"><button type="button" class="btn btn-primary btn-xs waves-effect" onclick="return confirm('Anda yakin menghapus materi ini?');">  DOWNLOAD  </button></a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <p class="align-left m-l-35 m-b-15"><a href="{{ url('siswakelolamateri') }}"><button type="button" class="btn btn-default waves-effect">KEMBALI</button></a></p>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
            <!-- #END# File Upload | Drag & Drop OR With Click & Choose -->
           
        </div>
@endsection