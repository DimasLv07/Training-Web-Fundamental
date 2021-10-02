<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{asset('frontend/img/img3.svg')}}" type="image/x-icon">

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css.css')}}">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

    <title>SignUp</title>

    <style>
        body {
            padding: 0;
            margin: 0;
            height: 100vh;
            font-family: 'Nunito', sans-serif;
        }

        .form-label {
            font-weight: bold;
        }

        .tag-p {
            margin-top: -10px;
            color: rgb(131, 128, 128);
        }

        .btn-primary {
            background-color: #6C63FF;
            border: none;
            width: 100%;
        }

        @media(max-width: 932px) {
            .display-none {
                display: none !important;
            }
        }

        .akun a {
            text-decoration: none;
        }
    </style>
  </head>

<body >
    <!-- row.m-0.h-100 -->
    <div class="row m-0 h-100" style="background-image: linear-gradient();">
        <!-- .col.p-0 -->
        <div class="col p-0 d-flex justify-content-center align-items-center display-none">
            <img src="{{asset('frontend/img/img.svg')}}" class="img-fluid w-75 h-75" alt="...">
            <!-- <img src="img/img3.svg" class="w-75 h-75" alt="..."> -->
        </div>
        <!-- .col.p-0 -->
        <div class="col p-0 d-flex justify-content-center align-items-center" >
            <form class="w-75">
                <h2 class="form-label">SignUp</h2>
                <p class="tag-p">Find your best ever Mie</p>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input placeholder="Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input placeholder="Password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check</label>
                </div>
                <a href="{{route('welcome')}}" type="button" class="btn btn-primary">SignUp</a>
            </form>
        </div>

    </div>


    <!-- Option 1: Boostrap Bundle with Popper -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
