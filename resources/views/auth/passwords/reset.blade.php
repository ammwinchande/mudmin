@extends('auth.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8-mt-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">
                        {{ __('Reset Password') }}
                    </h3>
                </div>

                <div class="card-body">
                    <form
                        method="POST"
                        action="{{ route('password.update') }}"
                    >
                        @csrf

                        <input
                            type="hidden"
                            name="token"
                            value="{{ $token }}"
                        >

                        <div class="form-group">
                            <label
                                for="email"
                                class="small mb-1"
                            >
                                {{ __('E-Mail Address') }}
                            </label>

                            <input
                                id="email"
                                type="email"
                                class="form-control py-4 @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ $email ?? old('email') }}"
                                aria-describedby="emailHelp"
                                placeholder="Enter email address"
                                required
                                autocomplete="email"
                                autofocus
                            >

                            @error('email')
                                <span
                                    class="invalid-feedback"
                                    role="alert"
                                >
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                        class="small mb-1"
                                        for="password"
                                    >
                                        {{ __('Password') }}
                                    </label>
                                    <input
                                        class="form-control py-4 @error('password') is-invalid @enderror"
                                        id="password"
                                        type="password"
                                        name="password"
                                        required
                                        autocomplete="current-password"
                                        placeholder="Enter password"
                                    />

                                    @error('password')
                                        <span
                                            class="invalid-feedback"
                                            role="alert"
                                        >
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                        class="small mb-1"
                                        for="password-confirm"
                                    >
                                        {{ __('Confirm Password') }}
                                    </label>
                                    <input
                                        class="form-control py-4 @error('password') is-invalid @enderror"
                                        id="password-confirm"
                                        type="password"
                                        name="password_confirmation"
                                        required
                                        autocomplete="new-password"
                                        placeholder="Enter password"
                                    />

                                    @error('password')
                                        <span
                                            class="invalid-feedback"
                                            role="alert"
                                        >
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                >
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
