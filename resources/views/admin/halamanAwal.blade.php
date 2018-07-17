@extends('layouts/master')

@section('title')
	{{ $title }}
@endsection

@section('content')
        <div class="container-fluid">
            <div class="block-header">
                <h1>Dashboard</h1>
            </div>
            <!-- Bootstrap Default Buttons -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            Selamat Datang (Admin)!
                            	<small> Apa yang ingin Anda lakukan?</small>
                            </h2>
                        </div>
                        <br>
                        <div class="body">
                       	 	
                            <div class="button-demo">
                                <a href="{{ url('kelolaguru') }}"><button type="button" class=" btn bg-amber btn-lg btn-block waves-effect"><h4>KELOLA GURU </h4></button></a>
                                
                                <a href="{{ url('kelolasiswa') }}"><button type="button" class=" btn bg-deep-orange btn-block btn-lg waves-effect"><h4>KELOLA SISWA </h4></button></a>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Bootstrap Default Buttons -->
           
        </div>
@endsection