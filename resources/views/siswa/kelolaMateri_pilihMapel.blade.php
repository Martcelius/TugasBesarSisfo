@extends('layouts/masterSiswa')

@section('title')
   {{ $title }}
@endsection


@section('content')
    <!-- Striped Rows -->
            <!-- Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Pilih Mapel
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <!--<label for="mapel">Pilih Mapel</label>-->
                                    <select name="mapel" form="/">
                                        <option>Matematika</option>
                                        <option>Biologi</option>
                                        <option>Fisika</option>
                                        <option>Kimia</option>
                                        <option>Bahasa Indonesia</option>
                                        <option>Geografi</option>
                                        <option>Ekonomi</option>
                                        <option>Sejarah</option>
                                </select>
                                </div>
                                <div class="col-sm-6">
                                    <p class="align-left m-r-30"><a href="{{ url('addguru') }}"><button type="button" class="btn btn-success waves-effect">LANJUT</button></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Select -->
@endsection 