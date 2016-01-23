@extends('backend/templates/index')
@section('js')
<script src='{{asset('assets/js/controller/admin-persyaratan.js')}}'></script>
@stop
@section('content')
<div class="main-content" ng-controller="absensicreate">
    <div class="container">
        <!-- start: PAGE HEADER -->
        <div class="row">
            <div class="col-sm-12">
                <!-- start: PAGE TITLE & BREADCRUMB -->
                {!! Breadcrumbs::render('persyaratancreate'); !!}
                <div class="page-header">
                    <h1>{{$title}}</h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="tabbable">
                    <ul class="nav nav-tabs tab-bricky" id="myTab">
                        <li class="active">
                            <a data-toggle="tab" href="#panel_tab2_example1">
                                <i class="green fa fa-home"></i> {{$title}} 
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="panel_tab2_example1" class="tab-pane active">
                            <alert ng-repeat="alert in alerts" type="<%alert.type%>" close="closeAlert($index)"><% alert.msg %></alert>
                            <form action="" method="post">
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                <input type="hidden" name="jurusan" value="" />
                                <input type="hidden" name="nama_mahasiswa" value="{{" />
                                 <table id="sample-table-1" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Jurusan</th>
                                            <th>Nama Mahasiswa</th>
                                            <th class="center">Kelengkapan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="center">
                                                <label class="checkbox-inline">
                                                <input type="checkbox" value="" name="" required>
                                                    Foto 4x6
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="" name="" required>
                                                    Fc. Ijasah
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="" name=""  required>
                                                    Fc. KK
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="" name=""  required>
                                                    Surat keterangan RT
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="" name=""  required>
                                                    Surat Persetujuan Ortu
                                                </label>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                                <input type="submit" class="btn btn-bricky" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop