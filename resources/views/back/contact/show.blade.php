@extends('back.layouts.master')
@section('title', $contact->title)

@section('content')
    <div class="col-lg-12 animate__animated animate__fadeIn animate__slow grid-margin">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-end">
                    <div class="text-black mr-auto"> {{$contact->title}}</div>
                    <a class="text-decoration-none" href="{{ route('admin.contacts.reply', $contact->id) }}">
                    <x-back.button type="button" color="warning">
                        <i class="mdi mdi-reply"></i>
                        Yanıtla
                    </x-back.button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <p class="text-black">{{$contact->message}}</p>
            </div>
        </div>
    </div>
@endsection

