
<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>@yield("page_title")</title>
    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset("css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{URL::asset("css/page01.css")}}" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
@include("includes.header01",compact("active_page"))

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    @yield("page_content")
</main>

@include("includes.footer01")
<script src="{{URL::asset("js/jquery.slim.min.js")}}"></script>
<script src="{{URL::asset("js/bootstrap.bundle.min.js")}}"></script>
<script src="{{URL::asset("js/page01.js")}}"></script>
</body>
</html>
