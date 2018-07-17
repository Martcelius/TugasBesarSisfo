@extends('layouts/master')

@section('title')
   {{ $title }}
@endsection


@section('content')
    <!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                KELOLA GURU
                            </h2>
                        </div>
                        <div class="body table-responsive">
                        	<div class="row">
 	                       			<p class="align-right m-r-30"><a href="{{ url('addguru') }}"><button type="button" class="btn btn-success waves-effect">TAMBAH</button></a></p>
                        	</div>
                        @if(count($guruguru))
                        
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NIP</th>
                                        <th>NAMA</th>
                                        <th>status</th>
                                        <th>mapel</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($guruguru as $guru)
										<tr>
											<td>{{$guru->nip}}</td>
											<td>{{$guru->nama}}</td>
											<td>{{$guru->status}}</td>
                                            <td>{{$guru->mapel}}</td>
											<td>
												<a href="{{ url('editguru', $guru->nip) }}"> <button type="button" class="btn btn-info btn-xs waves-effect">  SUNTING  </button></a>
												<a href="{{ url('deleteguru',$guru->nip) }}"><button type="button" class="btn btn-danger btn-xs waves-effect" onclick="return confirm('Anda yakin menghapus data dengan NIP {{$guru->nip}}?');">  HAPUS  </button></a>
											</td>
										</tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $guruguru->render() }}
                        </div>
                        	@else
                        	<p>Data kosong</p>
                         @endif
                         <div class="row">
 	                       			<p class="align-left m-l-35 m-b-15"><a href="{{ url('adminawal') }}"><button type="button" class="btn btn-default waves-effect">KEMBALI</button></a></p>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- #END# Striped Rows --> 
@endsection 