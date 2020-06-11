@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstname">firstname</label>
                                <input type="text" class="form-control" id="firstname" placeholder="firstname">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">lastname</label>
                                <input type="text" class="form-control" id="lastname" placeholder="lastname">
                            </div>

                        </div>
                        <div class="form-group col-md-2">
                            <label for="age">age</label>
                            <input type="text" class="form-control" id="age">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                            <div class="form-group col-md-6">
                                <label for="adresse">Adresse</label>
                                <input type="text" class="form-control" id="adresse" placeholder="1234 Main St">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="code_postal">code postal</label>
                                <input type="text" class="form-control" id="code_postal">
                            </div>
                        </div>
*
                        <div class="form-group col-md-4">
                            <label for="sport1">Musculation</label>
                            <select id="sport1" class="form-control">
                                <option selected>Je débute</option>
                                <option>Je pratique ce sport regulièrement</option>
                                <option>Je pratique très bien ce sport</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="sport2">Yoga</label>
                            <select id="sport2" class="form-control">
                                <option selected>Je débute</option>
                                <option>Je pratique ce sport regulièrement</option>
                                <option>Je pratique très bien ce sport</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="sport3">Fitness</label>
                            <select id="sport3" class="form-control">
                                <option selected>Je débute</option>
                                <option>J'en fait regulièrement</option>
                                <option>Je pratique très bien ce sport</option>
                            </select>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
