@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@section('content')

    <div class="container">
        @include('includes.message-block')
        <div class="rows">
            <div class="col-md-2">
                Левое меню
            </div>
            <main class="col-md-7">
                main
            </main>
            <div class="col-md-3">
                Vip
            </div>
        </div>
    </div>

@endsection