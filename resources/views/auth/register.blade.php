@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('adress') ? ' has-error' : '' }}">
                            <label for="adress" class="col-md-4 control-label">Adress</label>

                            <div class="col-md-6">
                                <input id="adress" type="text" class="form-control" name="adress" value="{{ old('adress') }}" required>

                                @if ($errors->has('adress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('code_postal') ? ' has-error' : '' }}">
                            <label for="code_postal" class="col-md-4 control-label">Code Postal</label>

                            <div class="col-md-6">
                                <input id="code_postal" type="text" class="form-control" name="code_postal" value="{{ old('code_postal') }}" required>

                                @if ($errors->has('code_postal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code_postal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ville') ? ' has-error' : '' }}">
                            <label for="ville" class="col-md-4 control-label">Ville</label>

                            <div class="col-md-6">
                                <input id="ville" type="text" class="form-control" name="ville" value="{{ old('ville') }}" required>

                                @if ($errors->has('ville'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('civilite') ? ' has-error' : '' }}">
                            <label for="civilite" class="col-md-4 control-label">Civilite</label>

                            <div class="col-md-6">
                                <!-- <input id="civilite" type="text" class="form-control" name="civilite" value="{{ old('civilite') }}" required> -->
                                <select class="form-control" name="civilite" value="{{ old('civilite') }}">
                                  <option value="mr">Mr</option>
                                  <option value="mr">Mselle</option>
                                  <option value="mr">Mdm</option>
                                </select>

                                @if ($errors->has('civilite'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('civilite') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('date_naissance') ? ' has-error' : '' }}">
                            <label for="date_naissance" class="col-md-4 control-label">Date_Naissance</label>
                            <div class="col-md-6">
                                <input id="date_naissance" type="text" class="form-control" name="date_naissance" value="{{ old('date_naissance') }}" required>
                                @if ($errors->has('date_naissance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_naissance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lieu_naissance') ? ' has-error' : '' }}">
                            <label for="lieu_naissance" class="col-md-4 control-label">Lieu_Naissance</label>

                            <div class="col-md-6">
                                <input id="lieu_naissance" type="text" class="form-control" name="lieu_naissance" value="{{ old('lieu_naissance') }}" required>

                                @if ($errors->has('lieu_naissance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lieu_naissance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nationalite') ? ' has-error' : '' }}">
                            <label for="nationalite" class="col-md-4 control-label">Nationalité</label>

                            <div class="col-md-6">
                                <input id="nationalite" type="text" class="form-control" name="nationalite" value="{{ old('nationalite') }}" required>

                                @if ($errors->has('nationalite'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nationalite') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('situation_familiale') ? ' has-error' : '' }}">
                            <label for="situation_familiale" class="col-md-4 control-label">Situation Familiale</label>

                            <div class="col-md-6">
                                <input id="situation_familiale" type="text" class="form-control" name="situation_familiale" value="{{ old('situation_familiale') }}" required>

                                @if ($errors->has('situation_familiale'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('situation_familiale') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cin') ? ' has-error' : '' }}">
                            <label for="cin" class="col-md-4 control-label">CIN</label>

                            <div class="col-md-6">
                                <input id="cin" type="text" class="form-control" name="cin" value="{{ old('cin') }}" required>

                                @if ($errors->has('cin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('type_cin') ? ' has-error' : '' }}">
                            <label for="type_cin" class="col-md-4 control-label">Type CIN</label>

                            <div class="col-md-6">
                                <select class="form-control" name="type_cin" value="{{ old('type_cin') }}">
                                  <option value="carte d'identité">carte d'identité</option>
                                  <option value="visa">visa</option>
                                  <option value="carte séjour">carte séjour</option>
                                </select>

                                @if ($errors->has('type_cin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type_cin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-8">
                                <button type="submit" class="btn btn-success">
                                    Register
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
