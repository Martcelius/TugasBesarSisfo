@extends('layouts/master')

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
                            <h2>Edit Guru - {{$varedit->nip}}</h2>
                            <small>Isi form berikut sebagai data guru</small>    
                        </div>
                        <div class="body">
                            <form id="form_advanced_validation" method="POST" action="{{ url('updateguru', $varedit->nip) }}">
                            {!! csrf_field() !!}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" value="{{ $varedit->nama }}" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" maxlength="12" minlength="8" value="{{ $varedit->password }}"  required>
                                        <label class="form-label">Password</label>
                                    </div>
                                    <div class="help-info">Min. Length: 8, Max. Length: 12 </div>
                                </div>
                                    

                                                    
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Validation -->
            
        </div>
@endsection