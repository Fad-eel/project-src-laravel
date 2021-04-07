<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
  <script src="{{ asset('js/login.js') }}" defer></script>
  <link rel="stylesheet" href="{{ asset('css/social.css') }}">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>

<body>
<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<!--<img src="img/bg.svg">-->
		</div>
		<div class="login-content">
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <h1>CONNEXION</h1><br>
                <div class="form-group">
                    <div class="input-div one">
           		        <div class="i">
           		   		    <i class="fas fa-at"></i>
           		        </div>
           		    <div class="div">
           		   		<h5>E-mail</h5>
           		   		<input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
           		        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
           		</div>

                <div class="form-group">
                    <div class="input-div pass">
           		        <div class="i">
           		   		    <i class="fas fa-lock"></i>
           		        </div>
           		    <div class="div">
           		   		<h5>Mot de passe</h5>
                        <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <br>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif
                <br>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Restez connecté !') }}
                        </label>
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </div>
                
                </div><br>
                <div class="social-btn">
                    <button href="" class="fb-btn">
                        <i class="fab fa-facebook"></i> Facebook
                    </button>&nbsp;&nbsp;&nbsp;
                    <button class="gg-btn">
                        <i class="fab fa-google"></i> Google
                    </button>
                </div><br>
                <a href="{{ route('register') }}">
                        {{ __('Inscrivez-vous') }}
                </a>  
            </form>
        </div>
    </div>
</body>
</html>





<!--
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="">
          <div class="">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-dark font-weight-bold mb-4">Connexion</h1>
                  </div>
                  <form class="POST" action="{{ route('login') }}">
                  @csrf
                    <div class="form-group">
                      <input id="email" type="email" placeholder = "E-Mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" placeholder = "Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Restez Connecté!!') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        {{ __('Connexion') }}
                    </button>
                    </form>
                    <hr>
                    <div class="row">
                    <a href="index.html" class="btn btn-google btn-user btn-block btn-outline-dark font-weight-bold">
                      <i class="fab fa-google fa-fw"></i> Connexion avec Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block btn-outline-dark font-weight-bold">
                      <i class="fab fa-facebook-f fa-fw"></i> Connexion avec Facebook
                    </a>
                    </div>
                  <hr>
                  <div class="text-center">
                    @if (Route::has('password.request'))
                        <a class="text-small btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié ?') }}
                        </a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>-->
