
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Niche Stack</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('dist/css/skins/_all-skins.min.css') }}">

  <!-- Data Tables -->
  <link rel="stylesheet" type="text/css" href="{{ url('https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css') }}"/>

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- CSS rules for styling the element inside the editor such as p, h1, h2, etc. -->
  
  <!-- froala -->
  <link href="node_modules/froala-editor/css/froala_style.min.css" rel="stylesheet" type="text/css" />      

  <!-- <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/js/froala_editor.pkgd.min.js"></script> -->

  <!-- froala main file -->
  <link href="{{ asset('vendor/froala-editor/css/froala_editor.pkgd.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- froala image plugin -->
  <link href="{{ asset('vendor/froala-editor/js/image.min.js') }}" rel="stylesheet" type="text/css" />
  

  <script type="text/javascript" src="{{ asset('vendor/froala-editor/js/froala_editor.pkgd.min.js') }}"></script>

  <!-- end -->

  <script>
    $(document).ready(function(){
      $(".alert").delay(5000).slideUp(300);
    });
  </script>      