@extends('back.layouts.master')
@section('title', 'İletişim Talebi Yanıtla')

@section('content')
    <div class="col-lg-12 animate__animated animate__fadeIn animate__slow grid-margin">
        <form action="{{ route('admin.contacts.send', $contact->id) }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-end">
                        <div class="text-black mr-auto"> {{$contact->title}}</div>
                    </div>
                </div>
                <div class="card-body">
                    <x-back.form.input type="text" name="title" title="Başlık"/>
                    <x-back.textarea.tinymce.editor name="message">
                        {!! old('message', 'Mesajınız..') !!}
                    </x-back.textarea.tinymce.editor>
                        <x-back.button class="btn-sm" color="primary" type="submit">Yanıtla</x-back.button>
                </div>

            </div>
        </form>
    </div>
@endsection
@push('custom-footer')
    <x-back.textarea.tinymce.config/>
@endpush
