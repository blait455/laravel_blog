<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/square/blue.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition ">



<!-- Error Page starts here -->
<style type="text/css">
    .error-page {
        min-height: 100vh;background: #d2d6de; width: 100%;margin: 0;padding: 10%;
    }
    h1.error_404 {
        font-size: 138px;
        line-height: 148px;
        margin-top: 40px;
        margin-bottom: 10px;
        font-family: 'Asap',sans-serif;
    }
</style>

<div class="error-page text-center">
    <div class="blog-site-logo">
        <a href="{{ route('admin.home') }}">
            <button class="btn btn-info btn-lg">Return To Admin Dashboard</button>
        </a>
    </div>

    <div class="small-24 medium-24 large-24 columns p-0">
        <div class=" error_404_block text-center">
            <h1 class="error_404">{{ $statusCode }}</h1>
            <h1 class="error_head">This page can't be found...</h1>
            <h2 class="subhead">...{{ $statusMessage }}</h2>
        </div>
    </div>
</div>
<!-- Error Page ends here -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('backend/js/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>

</body>
</html>
