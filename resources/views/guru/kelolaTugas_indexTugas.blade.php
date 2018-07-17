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
                                Index Tugas
                                <small>Daftar index tugas yang sudah di upload </small>
                            </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <div class="row">
                                <p class="align-right m-r-30"><a href="{{ url('guruaddtugas') }}"><button type="button" class="btn btn-success waves-effect">UPLOAD TUGAS</button></a></p>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Tugas</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>JAN</td>
                                        <td>FEB</td>
                                        <td>
                                            <a href="{{url('gurukelolatugas')}}"><button type="button" class="btn btn-default btn-xs waves-effect">  SUNTING  </button></a>
                                            <a href="{{url('gurukelolatugas')}}"><button type="button" class="btn btn-danger btn-xs waves-effect" onclick="return confirm('Anda yakin menghapus materi ini?');">  HAPUS  </button></a>
                                        </td>
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