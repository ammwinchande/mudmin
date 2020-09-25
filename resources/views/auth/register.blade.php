@extends('auth.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-7 mt-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">
                        {{ __('Create Account') }}
                    </h3>
                </div>
                <div class="card-body">
                    <form
                        method="POST"
                        action="{{ route('register') }}"
                    >
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                        class="small mb-1"
                                        for="first_name"
                                    >
                                        {{ __('First Name') }}
                                    </label>
                                    <input
                                        id="first_name"
                                        type="text"
                                        class="form-control py-4 @error('first_name') is-invalid @enderror"
                                        name="first_name"
                                        value="{{ old('first_name') }}"
                                        required
                                        autocomplete="first_name"
                                        autofocus
                                        placeholder="Enter first name"
                                    />
                                </div>
                                @error('first_name')
                                    <span
                                        class="invalid-feedback"
                                        role="alert"
                                    >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                        class="small mb-1"
                                        for="last_name"
                                    >
                                        {{ __('Last Name') }}
                                    </label>
                                    <input
                                        id="last_name"
                                        type="text"
                                        class="form-control py-4 @error('last_name') is-invalid @enderror"
                                        name="last_name"
                                        value="{{ old('last_name') }}"
                                        required
                                        autocomplete="last_name"
                                        autofocus
                                        placeholder="Enter last name"
                                    />
                                </div>
                                @error('last_name')
                                    <span
                                        class="invalid-feedback"
                                        role="alert"
                                    >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
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
                        <div class="form-group mt-4 mb-0">
                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                {{ __('Create Account') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small">
                        <a href="{{ route('login') }}">
                            {{ __('Have an account? Go to login') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
