<html class="easy-sidebar-active">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/easy-sidebar.css" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>

@include('layout.bar')

<div class="container">
    @section('content')
        這是內容
    @show
</div>

<footer class="footer navbar-fixed-bottom">
    @include('layout.footer')
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script>
    //easy-sidebar-toggle-right
    $('.easy-sidebar-toggle').click(function(e) {
        e.preventDefault();
//$('body').toggleClass('toggled-right');
        $('body').toggleClass('toggled');
//$('.navbar.easy-sidebar-right').removeClass('toggled-right');
        $('.navbar.easy-sidebar').removeClass('toggled');
    });
</script>
</body>
</html>