<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="{{asset('public/images/favicon.ico')}}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/images/favicon.ico')}}" />
    <!-- Generated: 2019-04-23 -->
    <title>Social Login</title>
    <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <!-- Dashboard css and jquery file -->
    <link href="{{asset('public/css/dashboard.css')}}" rel="stylesheet" />
    <script src="{{asset('public/js/jquery-3.2.1.min.js')}}"></script>
    <style type="text/css">
      .social-links li a {
          background: #e8e8e8;
          color: #3b414c;
          height: 35px;
          width: 35px;
          font-size: 18px;
          line-height: 35px;
          border: 1px solid #6f6f6f;
      }
      .social-links li a:hover {
          background: #d4d2d2;
          text-decoration: none;
      }
    </style>
  </head>
  <body class="">
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              @if(Session::has('success'))
                <div class="alert alert-success custom-success">
                  <i class="fe fe-check-square custom-icon"></i> 
                  {{Session::get('success')}}
                </div>
              @elseif(Session::has('error'))
                <div class="alert alert-danger custom-danger">
                  <i class="fe fe-alert-circle custom-icon"></i>
                  {{Session::get('error')}}
                </div>
              @endif
              {{Form::open(['class' => 'card', 'route' => 'login'])}}
                <div class="card-body p-6">
                  <div class="card-title"><h2 class="text-center"> Sign In </h2></div>
                  <div class="form-group">
                    <label class="form-label">Email address</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter email">
                    <span style="color: #d80d0d;">{{$errors->first('email')}}</span>
                  </div>
                  <div class="form-group">
                    <label class="form-label"> Password </label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span style="color: #d80d0d;">{{$errors->first('password')}}</span>
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                  </div>

                  <ul class="social-links list-inline mb-0 mt-2">
                    <div class="form-group" style="margin-top: 15px; margin-bottom: 5px;">
                        <span class="">Or Login With</span>
                    </div>
                    <li class="list-inline-item">
                        <a href="{{URL::to('/redirect/facebook')}}" title="Facebook"><i class="fe fe-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{URL::to('/redirect/twitter')}}" title="Twitter"><i class="fe fe-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{URL::to('/redirect/instagram')}}" title="Instagram"><i class="fe fe-instagram"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{URL::to('/redirect/linkedin')}}" title="Linkedin"><i class="fe fe-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{URL::to('/redirect/github')}}" title="GitHub"><i class="fe fe-github"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{URL::to('/redirect/bitbucket')}}" title="Bitbucket"><i class="fe fe-clipboard"></i></a>
                    </li>
                </ul>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>