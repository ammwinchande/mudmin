@extends('auth.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 mt-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">
                        {{ __('Password Recovery') }}
                    </h3>
                </div>

                <div class="card-body">
                    <div class="small mb-3 text-muted">
                        Enter your email address and we will send you a link to reset your password.
                    </div>
                    @if(session('status'))
                        <div
                            class="alert alert-success mt-3"
                            role="alert"
                        >
                            {{ session('status') }}
                        </div>
                    @endif

                    <form
                        method="POST"
                        action="{{ route('password.email') }}"
                    >
                        @csrf

                        <div class="form-group">
                            <label
                                class="small mb-1"
                                for="email"
                            >
                                {{ __('E-Mail Address') }}
                            </label>
                            <input
                                class="form-control py-4 @error('email') is-invalid @enderror"
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                autofocus
                                aria-describedby="emailHelp"
                                placeholder="Enter email address"
                            />
                            @error('email')
                                <span
                                    class="invalid-feedback"
                                    role="alert"
                                >
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a
                                class="small"
                                href="{{ route('login') }}"
                            >
                                Return to login
                            </a>
                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small">
                        <a href="{{ route('register') }}">
                            {{ __('Need an account? Sign up!') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
