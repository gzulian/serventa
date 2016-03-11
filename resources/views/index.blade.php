<!DOCTYPE html>
<html>  
    <head>
        
        @include('includes.head')
        @include('includes.jquery-ui')
        <link rel="stylesheet" href="{{ URL::asset('/library/autocomplete/style.css') }}">
        <script src="{{ URL::asset('/library/autocomplete/typeahead.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('/js/Moment.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('/js/addDateTimepicker.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
      
        $(function(){

            $('#search').click(function(){
                var param = $('#param').val();
                $.ajax({
                    type:'post',
                    dataType:'json',
                    data:'param='+param,
                    url:"{{ url('/search') }}",
                    success:function(data){
                        console.log(data);
                    }

                });

                $('#newQuotation').fadeIn( 950);
            });
          // applied typeahead to the text input box
          $('#param').typeahead({
            name: 'service',
            // data source
            prefetch: "{{ url('/search') }}",
            // max item numbers list in the dropdown
            limit: 10
          });
                    
        });
  </script>
    </head>
    <body>
        <div class="wrapper">
            <header class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.html" class="navbar-brand"><span class="logo"><i class="fa fa-recycle"></i> Serventa</span></a>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <!--li class="new-ads"><a href="account_create_post.html" class="btn btn-ads   ">Advertise</a></li-->
                            <li><a href="signup.html">Quiénes somos</a></li>
                            
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-user"></i> <strong class="caret"></strong>&nbsp;</a>
                                <div class="dropdown-menu dropdown-login" style="padding:15px;min-width:250px">
                                    <form>                       
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon addon-login"><i class="fa fa-user"></i></span>
                                                <input type="text" placeholder="Username or email" required="required" class="form-control input-login">                                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon addon-login"><i class="addon fa fa-lock"></i></span>
                                                <input type="password" placeholder="Password" required="required" class="form-control input-login">                                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label class="string optional" for="user_remember_me">
                                                    <input type="checkbox" id="user_remember_me" style="">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-custom btn-block" value="Sign In">
                                        <a href="forgot_password.html" class="btn-block text-center">Forgot password?</a>
                                    </form>                                    
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </header>
            <section class="" > 
                <div class="container text-center" >
                    <h2 class="hero-title">Consigna!!!</h2>
                    <p class="hero-description hidden-xs">Encontramos el servicio que necesitas.</p>
                    <div class="row" style="background-color:#FFF  ">
                        <div class="col-md-1 col-sm-1"></div>
                        <div class="col-md-10 col-sm-10" >
                            <br/>
                            <form>
                               <div class='input-group '>
                                    <span class="input-group-addon " style="background-color:#1E90FF;color:#FFF">
                                        <b>Necesito:</b>
                                    </span>
                                    <input autofocus type="text" id="param" class="form-control input-lg search-first " placeholder="Maestro ...">
                                    <div class="input-group-btn">    
                                        <button id="search" type="button" class="btn btn-custom btn-block btn-lg"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                            <br/>
                            <div id="newQuotation" style="display:none">
                                <div class="panel panel-primary" >
                                    <div class="panel-heading" style="background-color:#1E90FF"><b>Nueva solicitud</b></div>
                                    <div class="panel-body">
                                        <form>
                                            <div class="row"> 
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon addonAlternative ">
                                                            Cuando:
                                                        </span>
                                                        <input type="text" class="form-control datetimepicker" name="quatation[date]"  >
                                                        <span class="input-group-addon ">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon addonAlternative">
                                                            Donde:
                                                        </span>
                                                        <select  class="form-control" name="quatation[city]" >
                                                        </select>
                                                        <span class="input-group-addon ">
                                                            <span class="glyphicon glyphicon-map-marker"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon addonAlternative">
                                                            Descripción:
                                                        </span>
                                                        <textarea  placeholder="Dirección y detalles específicos" class="form-control" name="quatation[city]" ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <input name="docs" type="file" class="filestyle">
                                                        <span class="help-block"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 col-sm-1">
                                                    <button type="button" class="btn btn-info">
                                                        <span class="glyphicon glyphicon-question-sign"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row" >
                                                
                                                <div class="col-md-12 col-sm-12">
                                                    <button type="submit" class=" form-control btn btn-success"><b>Cotizar</b> <span class="glyphicon glyphicon-ok "></span>
                                                    </button>
                                                </div>
                                                

                                            </div>

                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-1"></div>
                    </div>
                </div>
            </section>
        </div>
        <section class="main">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-xs-4 col-sm-3">
                            <div class="shortcut">
                                <a href="category.html"><i class="fa fa-user shortcut-icon icon-blue"></i></a>
                                <a href="category.html"><h3>UserOne</h3></a>
                                <span class="total-items">234,567</span>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <div class="shortcut">
                                <a href="category.html"><i class="fa fa-user shortcut-icon icon-green"></i></a>
                                <a href="category.html"><h3>user</h3></a>
                                <span class="total-items">25,366</span>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <div class="shortcut">
                                <a href="category.html"><i class="fa fa-user shortcut-icon icon-brown"></i></a>
                                <a href="category.html"><h3>user</h3></a>
                                <span class="total-items">252,546</span>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <div class="shortcut">
                                <a href="category.html"><i class="fa fa-female shortcut-icon icon-user"></i></a>
                                <a href="category.html"><h3>user</h3></a>
                                <span class="total-items">52,546</span>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <div class="shortcut">
                                <a href="category.html"><i class="fa fa-user
                                shortcut-icon icon-dark-blue"></i></a>
                                <a href="category.html"><h3>Gadget</h3></a>
                                <span class="total-items">215,546</span>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <div class="shortcut">
                                <a href="category.html"><i class="fa fa-user shortcut-icon icon-orange"></i></a>
                                <a href="category.html"><h3>Sport</h3></a>
                                <span class="total-items">415,546</span>
                            </div>  
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <div class="shortcut">
                                <a href="category.html"><i class="fa fa-user shortcut-icon icon-light-blue"></i></a>
                                <a href="category.html"><h3>Industry</h3></a>
                                <span class="total-items">15,546</span>
                            </div>  
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <div class="shortcut">
                                <a href="category.html"><i class="fa fa-user shortcut-icon icon-light-green"></i></a>
                                <a href="category.html"><h3>Job</h3></a>
                                <span class="total-items">152,546</span>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="counter">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item-counter">
                            <span class="item-icon"><i class="fa fa-database"></i></span>
                            <div data-refresh-interval="100" data-speed="3000" data-to="7803" data-from="0" class="item-count">7803</div>
                            <span class="item-info">Servicios prestados</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-counter">
                            <span class="item-icon"><i class="fa fa-users"></i></span>
                            <div data-refresh-interval="50" data-speed="5000" data-to="427" data-from="0" class="item-count">427</div>
                            <span class="item-info">Prestadores de servicio</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-counter">
                            <span class="item-icon"><i class="fa fa-info"></i></span>
                            <div data-refresh-interval="80" data-speed="5000" data-to="639" data-from="0" class="item-count">639</div>
                            <span class="item-info">Solicitudes pendientes</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-counter">
                            <span class="item-icon"><i class="fa fa-users"></i></span>
                            <div data-refresh-interval="80" data-speed="5000" data-to="1548" data-from="0" class="item-count">1548</div>
                            <span class="item-info">Usuarios totales</span>
                        </div>
                    </div>
                </div>
            </div> <!-- / .counter -->
        </div>
    @include('includes.footer')

    </body>
    <script src="{{ URL::asset('/template/assets/plugins/counter/jquery.countTo.js') }}"></script>
    <script src="{{ URL::asset('/template/assets/plugins/filestyle/bootstrap-filestyle.min.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function () {

        // ===========Featured Owl Carousel============
        if ($(".owl-carousel-featured").length > 0) {
            $(".owl-carousel-featured").owlCarousel({
                items: 3,
                lazyLoad: true,
                pagination: true,
                autoPlay: 5000,
                stopOnHover: true
            });
        }

        // ==================Counter====================
        $('.item-count').countTo({
            formatter: function (value, options) {
                return value.toFixed(options.decimals);
            },
            onUpdate: function (value) {
                console.debug(this);
            },
            onComplete: function (value) {
                console.debug(this);
            }
        });
    });
    </script>
</html>