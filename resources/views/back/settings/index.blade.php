@extends('back.layouts.master')
@section('title','Genel Ayarlar')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Genel Ayarlar </h3>
                {{ Breadcrumbs::render('settings') }}
            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <i class="mdi mdi-alert-circle"></i>
                        • {{ $error }}
                    </div>
                @endforeach
            @endif
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Site Başlığı</label>
                                    <input type="text" name="title" value="{{ $settings->title }}"
                                           class="form-control" id="title" placeholder="Site Başlığı">
                                </div>
                                <div class="form-group">
                                    <label for="description">Site Açıklaması</label>
                                    <input type="text" value="{{ $settings->description }}" name="description"
                                           class="form-control" id="description" placeholder="Site Açıklaması">
                                </div>
                                <div class="form-group">
                                    <label for="email">Mail Adresi</label>
                                    <input type="email" value="{{ $settings->email }}" name="email"
                                           class="form-control" id="email" placeholder="Mail adresiniz">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Telefon Numarası</label>
                                    <input type="text" value="{{ $settings->phone }}" name="phone"
                                           class="form-control" id="phone">
                                </div>
                                <img src="{{ asset('storage/back/images/' . $settings->logo) }}" alt="">
                                <div class="form-group">
                                    <label>Logo</label>
                                    <input type="file" value="{{ $settings->logo }}" name="logo"
                                           class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" value="{{ $settings->logo }}"
                                               class="form-control file-upload-info" disabled=""
                                               placeholder="Logo Yükle">
                                        <span class="input-group-append">
                             <button class="file-upload-browse btn btn-primary" type="button">Yükle</button>
                                        </span>
                                    </div>
                                </div>
                                <img src="{{ asset( 'storage/back/images/' . $settings->favicon) }}" alt="">
                                <div class="form-group">
                                    <label>Favicon</label>
                                    <input type="file" value="{{ $settings->favicon }}" name="favicon"
                                           class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" value="{{ $settings->favicon }}"
                                               class="form-control file-upload-info" disabled=""
                                               placeholder="Favicon Yükle">
                                        <span class="input-group-append">
                             <button class="file-upload-browse btn btn-primary" type="button">Yükle</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="keywords">Anahtar Kelimeler</label>
                                    <input type="text" value="{{ $settings->keywords }}" name="keywords"
                                           class="form-control" id="keywords" placeholder="kelime1,kelime2">
                                </div>
                                <div class="form-group">
                                    <label for="address">İşletme Adresi</label>
                                    <input type="text" value="{{ $settings->address }}" name="address"
                                           class="form-control" id="keywords" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="maps">Maps Kodu</label>
                                    <input type="text" value="{{ $settings->maps }}" name="maps"
                                           class="form-control" id="maps" placeholder="embed?pb=xxxxxxx">
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Kaydet</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src=" {{ asset('back/assets/js/file-upload.js') }} "></script>
@endsection


