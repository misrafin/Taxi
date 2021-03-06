{{-- Menu and scripts template for user pages --}} 

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF defense -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <!-- /.CSRF defense -->
    
    <!-- Phones first -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- /.Phones first -->
    
    <title>{{$title}}</title>
    
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- /.Jquery -->
     
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
    <!-- /.Bootstrap css -->
    
    <!-- Font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    {!! Html::style('stylesheets/menu.css') !!}
</head>
<body>

    
    <div class="container">
        <!-- Main menu -->
        <div>
			<a href="/">{!! Html::image('img/taxilogo.png', 'Site logo, a taxi', array('class' => 'img-responsive center-block')) !!}</a>
		</div>
        <div class="navbar navbar-inverse bs-docs-nav" role="banner">
              <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                  <span class="sr-only">Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a style="font-size:15px" class="navbar-brand" href="order">
                   <b>Leave an order</b> <i class="fa fa-arrow-right fa-lg"></i> 
                </a>
              </div>
              <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul style="font-weight: bold; font-family: Verdana, sans-serif;" 
                    class="nav navbar-nav">
                    <li>
                      <a href="order">
                          <i class="fa fa-calendar fa-lg"></i> Order
                      </a>
                    </li>

                    <li>
                      <a href="contacts">
                          <i class="fa fa-phone fa-lg"></i> Contacts
                      </a>
                    </li>

                    <li>
                      <a href="about">
                          <i class="fa fa-user fa-lg"></i> About us
                      </a>
                    </li>

                    <li>
                      <a href="comments">
                          <i class="fa fa-comments fa-lg"></i> Comments
                      </a>
                    </li>

                </ul>
              </nav>
        </div>
        <!-- /.Main menu -->
        
        <!-- Content -->
        <div>
            <div class="text-center">
                <div style="padding-bottom : 8px;">
                    <!-- Contacts-->
                    <a style="text-decoration:none;" href='contacts'>
                    <!-- /.Contacts -->

                        <span style="font-size: 18px; " class="label label-success" >
                        <span class="glyphicon glyphicon-earphone"></span> Call us</span>  
                    </a> 
                </div>
                <div>
                <!-- Phone number and the flag -->
                <span style="font-size:18px;" class="badge">
                    <a style="text-decoration: none; color: #222" href="tel:{{ $number }}">{{ $number }}</a>
                </span>
                {!! Html::image('img/ru.png', 'russian flag', array('class' => 'img')) !!}
                <!-- /.Phone number and the flag -->
                </div>
            </div>

            </br>

            @yield('content')
        </div>
        </br> </br> </br>
    </div>
    <!-- /.Content -->
        
    <!-- Bootstrap js-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <!-- /.Bootstrap js-->
    

</body>
</html>
