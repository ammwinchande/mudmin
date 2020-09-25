@extends('auth.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-7 mt-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">
                        {{ __('Verify Your Email Address') }}
                    </h3>
                </div>

                <div class="card-body">
                    @if(session('resent'))
                        <div
                            class="alert alert-success"
                            role="alert"
                        >
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <div class="small mb-3 text-muted">
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                    </div>
                    <form
                        class="d-inline"
                        method="POST"
                        action="{{ route('verification.resend') }}"
                    >
                        @csrf
                        <button
                            type="submit"
                            class="btn btn-link p-0 m-0 align-baseline"
                        >
                            {{ __('click here to request another') }}
                        </button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
