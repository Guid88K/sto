<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/main.css')}}">
    {{--    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>--}}
    {{--    <script src="{{asset('js/js.js')}}"></script>--}}
</head>
<body>
<div class="container-fluid" style="  background: linear-gradient(to left, black, black,darkred);">
    <div class="row">
        <div class="col-lg-12 h-100 p-0">
            <nav class=" scroll-mnu   navbar navbar-expand-lg w-100 navbar-dark bg-dark "
                 style="position: fixed; z-index: 10;">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>
            </nav>


            <div class=" align-middle text-center  "
                 style="; background-image: url('image/mainCar.jpg'); min-height: 790px; background-size: cover; background-position: center;">
                <div class="container">
                    <div class="row  ">
                        <div class="col-md-8 bg-transparent py-5 mt-5  text-white  mx-auto ">
                            <p class=" lead "><b>we introduce</b></p>
                            <label class=" text-uppercase  " style="font-size: 60px;"><span><b class="text-uppercase">heli</b></span>theme
                            </label>

                            <form class="form-inline" style=" box-sizing: content-box;"
                                  action="{{asset('/query')}}">
                                <input class="form-control  mr-lg-0 " style="min-width: 90%;" type="text"
                                       placeholder="Search" aria-label="Search" list="town" name="search" autocomplete="off">
                                <datalist id="town">
                                    @foreach($city as $t)
                                        <option value="{{$t->name_town}}">{{$t->name_town}}</option>
                                    @endforeach
                                </datalist>
                                <button class="btn btn-dark  my-sm-0" type="submit"><i class="fa fa-search"></i>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row pt-5" style="background-color: white;">
        <div class="col-md-12  text-center">
            <h3>Як це працює?</h3>
        </div>
    </div>

    <div class="row py-3 mb-5 " style="background-color: white;">
        <div class="col-md-4 pb-5 text-center">
            <i class=" mb-3 fa fa-thumbs-up" style="font-size: 100px;  "></i>
            <p>Вибрати найкраще СТО за індивідуальними параметрами</p>
        </div>
        <div class="col-md-4 pb-5 text-center">
            <i class=" mb-3 fa fa-comments" style="font-size: 100px; "></i>
            <p>Дізнатися про якість роботи СТО на основі відгуків реальних клієнтів
            </p>
        </div>
        <div class="col-md-4 pb-5 text-center">
            <i class=" mb-3 fa fa-clock-o" style="font-size: 100px; "></i>
            <p> Записатися на СТО в зручне для вас час</p>
        </div>
    </div>

    <div class="row  pt-5  ">
        <div class="col-lg-10 mx-auto mb-5">
            <div class="row">
                @foreach($sto as $s)
                    <div class="col-md-3 mx-auto ">
                        <a href="{{ route('sto_public.show', ['id' => $s->id])}}">
                            <img class="img-fluid mb-3"
                                 src="{{ asset('upload/'.$s->image)}}">
                        </a>
                        <p class="text-white text-center">{{$s->address}}</p>
                        <p class="text-white text-center">{{$s->town}}</p>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

{{--    <div class="row mx-auto py-5">--}}
{{--        <div class="p-4 col-md-3 text-white mx-auto">--}}
{{--            <h2 class="mb-4">Pingendo</h2>--}}
{{--            <p>A company for whatever you may need, from website prototyping to publishing</p>--}}
{{--            <i class="mr-3 fa fa-twitter "></i>--}}
{{--            <i class="mr-3 fa fa-facebook"></i>--}}
{{--            <i class="mr-3 fa fa-google-plus"></i>--}}
{{--            <i class="mr-3 fa fa-pinterest-square"></i>--}}

{{--        </div>--}}
{{--        <div class="p-4 col-md-3 text-white mx-auto">--}}
{{--            <h2 class="mb-4">Mapsite</h2>--}}
{{--            <ul class="list-unstyled text-white"><a href="#" class="text-white">Home</a> <br> <a href="#"--}}
{{--                                                                                                 class="text-white">About--}}
{{--                    us</a> <br> <a href="#" class="text-white">Our services</a> <br> <a href="#" class="text-white">Stories</a>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="p-4 col-md-3 text-white mx-auto">--}}
{{--            <h2 class="mb-4">Contact</h2>--}}
{{--            <p><a href="#" class="text-white">--}}
{{--                    <i class="fa d-inline mr-3 text-muted fa-phone"></i>+246 - 542 550 5462</a></p>--}}
{{--            <p><a href="#" class="text-white">--}}
{{--                    <i class="fa d-inline mr-3 text-muted fa-envelope-o"></i>info@pingendo.com</a></p>--}}
{{--            <p><a href="#" class="text-white">--}}
{{--                    <i class="fa d-inline mr-3 fa-map-marker text-muted"></i>365 Park Street, NY</a></p>--}}
{{--        </div>--}}
{{--        <div class="p-4 col-md-3 text-white mx-auto">--}}
{{--            <h2 class="mb-4">Subscribe</h2>--}}
{{--            <form>--}}
{{--                <fieldset class="form-group"><label for="exampleInputEmail1">Get our newsletter</label> <input--}}
{{--                        type="email" class="form-control" placeholder="Enter email"></fieldset>--}}
{{--                <button type="submit" class="btn btn-outline-light">Submit</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>


<script
    src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
</script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
