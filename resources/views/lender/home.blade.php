<!DOCTYPE html>
<html>  
    <head>
        @include('includes.head')

        

    </head>
    <body>
    <div class="wrapper">
            <header  class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar">a</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-md-3 ">
                            <a href="index.html" class="navbar-brand"><span class="logo"><i class="fa fa-recycle"></i> Serventa</span></a>  
                        </div>
                        <div class="col-md-6 col-sm-6  cat-search-input">
                            <form>
                                <div class='input-group '>
                                    <span class="input-group-addon ">
                                        Necesito:
                                    </span>
                                    <input placeholder="Nombre del servicio" class="form-control input-lg search-first" type="text">
                                    <div class="input-group-btn">    
                                        <button class="btn btn-custom btn-block btn-lg"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <!-- -->
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-user"></i> <strong class="caret"></strong>&nbsp;</a>
                                    <div class="dropdown-menu dropdown-login" style="padding:15px;min-width:250px">                             
                                    </div>
                                </ul>
                            </div>
                            <!-- -->
                        </div>
                    </div>
                </div>
            </header>
            <hr/>
            <section class="category-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <div class="widget">
                                <div class="widget-header">
                                    <h3>Accesos directos</h3>
                                </div>
                                <div class="widget-body">
                                    <ul class="trends">
                                        <li><a href="#">Conocimientos &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Equipos de trabajo &nbsp; <span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Mensajes &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Solicitudes nuevas &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Prestadores &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="category-header no-margin-bottom">
                                <div class="row">
                                    <div class="col-md-12  cat-search-input">
                                        <ul class="nav nav-pills nav-justified">
                                            <li role="presentation" class="active"><a href="">Muro</a></li>
                                            <li role="presentation" class=""><a href="">Solicitudes</a></li>
                                            <li role="presentation" class=""><a href="">Perfil</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="list-results">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="item-ads highlight-ads">
                                            <div class="row">
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-img">
                                                        <img alt="" src="{{URL::asset('/template/assets/img/products/lock.png')}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-6">
                                                    <div class="item-title">
                                                        <a href="detail.html"><h4>Guardia seguridad</h4></a>
                                                    </div>
                                                    <div class="item-meta">
                                                        <ul>
                                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                            <li class="item-cat hidden-xs"><i class="fa fa-bars"></i> <a href="category.html">Electronics</a> , <a href="category.html">Smartphone</a></li>
                                                            <li class="item-location hidden-xs"><a href="category.html"><i class="fa fa-map-marker"></i> Manchester</a></li>
                                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-price">
                                                        <h3>$ 100</h3>
                                                        <span>Negotiable</span>
                                                    </div>
                                                    <div class="item-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="detail.html" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-ads">
                                            <div class="row">
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-img">
                                                        <img alt="" src="{{URL::asset('/template/assets/img/products/lock.png')}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-6">
                                                    <div class="item-title">
                                                        <a href="detail.html"><h4>Guardia seguridad os7</h4></a>
                                                    </div>
                                                    <div class="item-meta">
                                                        <ul>
                                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                            <li class="item-cat hidden-xs"><i class="fa fa-bars"></i> <a href="category.html">Electronics</a> , <a href="category.html">Smartphone</a></li>
                                                            <li class="item-location hidden-xs"><a href="category.html"><i class="fa fa-map-marker"></i> Manchester</a></li>

                                                            <li class="item-type"><i class="fa fa-bookmark"></i> Used</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-price">
                                                        <h3>$ 45</h3>
                                                        <span>Negotiable</span>
                                                    </div>
                                                    <div class="item-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="detail.html" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-ads">
                                            <div class="row">
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-img">
                                                        <img alt="" src="{{URL::asset('/template/assets/img/products/lock.png')}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-6">
                                                    <div class="item-title">
                                                        <a href="detail.html"><h4>Guardia sin os7</h4></a>
                                                    </div>
                                                    <div class="item-meta">
                                                        <ul>
                                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                            <li class="item-cat hidden-xs"><i class="fa fa-bars"></i> <a href="category.html">Electronics</a> , <a href="category.html">Smartphone</a></li>
                                                            <li class="item-location hidden-xs"><a href="category.html"><i class="fa fa-map-marker"></i> Manchester</a></li>
                                                            <li class="item-type"><i class="fa fa-bookmark"></i> Used</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-price">
                                                        <h3>$ 60</h3>
                                                        <span>Negotiable</span>
                                                    </div>
                                                    <div class="item-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="detail.html" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-ads highlight-ads">
                                            <div class="row">
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-img">
                                                        <img alt="" src="{{URL::asset('/template/assets/img/products/lock.png')}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-6">
                                                    <div class="item-title">
                                                        <a href="detail.html"><h4>Guardias xxx</h4></a>
                                                    </div>
                                                    <div class="item-meta">
                                                        <ul>
                                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                            <li class="item-cat hidden-xs"><i class="fa fa-bars"></i> <a href="category.html">Electronics</a> , <a href="category.html">Smartphone</a></li>
                                                            <li class="item-location hidden-xs"><a href="category.html"><i class="fa fa-map-marker"></i> Manchester</a></li>
                                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-price">
                                                        <h3>$ 75</h3>
                                                        <span>Negotiable</span>
                                                    </div>
                                                    <div class="item-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="detail.html" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-2 col-sm-2">
                            <div class="widget">
                                <div class="widget-header">
                                    <h3>Otros servicios</h3>
                                </div>
                                <div class="widget-body">
                                    <ul class="trends">
                                        <li>
                                            <div class="shortcut">
                                                <a href="category.html"><i class="fa fa-soccer-ball-o shortcut-icon icon-orange"></i></a>
                                                <a href="category.html"><h3>Publicidad</h3></a>
                                            </div>  
                                        </li>
                                        <li>
                                            <div class="shortcut">
                                                <a href="category.html"><i class="fa fa-soccer-ball-o shortcut-icon icon-orange"></i></a>
                                                <a href="category.html"><h3>Publicidad</h3></a>
                                            </div>  
                                        </li>
                                        <li>
                                            <div class="shortcut">
                                                <a href="category.html"><i class="fa fa-soccer-ball-o shortcut-icon icon-orange"></i></a>
                                                <a href="category.html"><h3>Publicidad</h3></a>
                                            </div>  
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="footer">
                <div class="container">
                <ul class="pull-left footer-menu">
                    <li>
                        <a href="index.html"> Home </a>
                        <a href="about.html"> About us </a>
                        <a href="contact.html"> Contact us </a>
                    </li>
                </ul>
                <ul class="pull-right footer-menu">
                    <li> &copy; 2015 Dlapak </li>
                </ul>
                </div>
            </div>
        </div>
        <!-- Essentials -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/owl-carousel/owl.carousel.js"></script>
        <script src="assets/plugins/counter/jquery.countTo.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </body>
</html> 