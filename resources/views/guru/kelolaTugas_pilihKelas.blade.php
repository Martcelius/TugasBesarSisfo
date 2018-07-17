@extends('layouts/masterGuru')

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
                                PILIH KELAS
                                <small>Pilih kelas untuk memasukkan nilai</small>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <select class="form-control show-tick">
                                        <option value="">----</option>
                                        <option value="10-1">Kelas 10-1</option>
                                        <option value="10-2">Kelas 10-2</option>
                                        <option value="11-IPA">Kelas 11-IPA</option>
                                        <option value="11-IPS">Kelas 11-IPS</option>
                                        <option value="12-IPA">Kelas 12-IPA</option>
                                        <option value="12-IPS">Kelas 12-IPS</option>
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