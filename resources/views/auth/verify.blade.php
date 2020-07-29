@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-top: 2%">
                <div class="box">
                    <h3 class="box-title" style="padding: 2%">Potvrdi Email</h3>

                    <div class="box-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">Ponovo je poslana
                            </div>
                        @endif
                        <p>Potvrdi link u emailu,</p>
                        <a href="{{ route('verification.resend') }}">ponovo pošalji'</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection