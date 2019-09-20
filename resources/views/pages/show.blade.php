<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/main.css')}}">

</head>
<body onload="init()">
<div class="container-fluid" style="  background: linear-gradient(to left, black, black,darkred);">
    <div class="row ">
        <div class="col-lg-12 p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0 mr-5  ">
                        <input class="form-control mr-sm-2 " type="search" aria-label="Search">
                        <button class="btn btn-outline-dark bg-dark   my-sm-0" type="submit"><i
                                    class="fa fa-search my-auto text-center text-white"></i></button>
                    </form>
                </div>
            </nav>


        </div>
    </div>


    <div class="row  pt-5  ">

        <div class="col-lg-6 mx-auto ">

            <img class="img-fluid mb-3" src="{{ asset('upload/'.$sto->image)}}">
        </div>
        <div class="col-md-6">
            <h3 class="text-white mb-4">{{$sto->name}}</h3>
            <p class="text-white">{{$sto->description}}</p>

        </div>
    </div>

    <div class="row px-3 text-white mb-5">
        <div class="col-md-6">
            <h4 class="mt-4 text-center">Comments</h4>
            <div class="row">
                <div class="col-md-3 text-left"><b>Name</b></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3 text-left">12.09.2019</div>
            </div>


            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Consequatur distinctio doloribus ex labore nesciunt veritatis voluptatem!
                Aspernatur delectus exercitationem in ipsum nemo officiis ullam.
                Cum dolorum ipsum non sapiente tempora!</p>


            <div class="row">
                <div class="col-md-3 text-left"><b>Name</b></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3 text-left">12.09.2019</div>
            </div>
            <p class="text-left">
                Consequatur distinctio doloribus ex labore nesciunt veritatis voluptatem!

                Cum dolorum ipsum non sapiente!</p>

            <h4 class="text-center mt-4 mb-5">Add Comments</h4>
            <div>
                <input type="text" class="form-control my-3" id="form27" placeholder="Name">
                <textarea class="form-control mb-3" id="form30" rows="3" placeholder="Your message"></textarea>
                <button type="submit" class="btn btn-dark">Send</button>
            </div>


        </div>

        <div class="col-lg-6 mx-auto ">

            <div class="mx-auto  " id="map_canvas"
                 style="min-width: 100px; min-height: 230px; max-width: 400px;  "></div>

        </div>
    </div>
    <div class="row mx-auto">
        <div class="p-4 col-md-3 text-white mx-auto">
            <h2 class="mb-4">Pingendo</h2>
            <p>A company for whatever you may need, from website prototyping to publishing</p>
            <i class="mr-3 fa fa-twitter "></i>
            <i class="mr-3 fa fa-facebook"></i>
            <i class="mr-3 fa fa-google-plus"></i>
            <i class="mr-3 fa fa-pinterest-square"></i>

        </div>
        <div class="p-4 col-md-3 text-white">
            <h2 class="mb-4">Mapsite</h2>
            <ul class="list-unstyled text-white">
                <a href="#" class="text-white">Home</a>
                <br>
                <a href="#" class="text-white">About
                    us</a>
                <br> <a href="#" class="text-white">Our services</a> <br> <a href="#" class="text-white">Stories</a>
            </ul>
        </div>
        <div class="p-4 col-md-3 text-white">

            <h2 class="mb-4">Contact</h2>
            <p>
                @foreach($contact as $c)
                    <i class="fa d-inline mr-3 text-muted fa-phone"></i>{{$c->contact}}
                @endforeach
            </p>
            {{--                    <p><a href="#" class="text-white">--}}
            {{--                            <i class="fa d-inline mr-3 text-muted fa-envelope-o"></i>info@pingendo.com</a></p>--}}
            <p>
                <i class="fa d-inline mr-3 fa-map-marker text-muted"></i>{{$sto->address}}</p>

        </div>
        <div class="p-4 col-md-3 text-white">
            <h2 class="mb-4">Subscribe</h2>
            <form>
                <fieldset class="form-group"><label for="exampleInputEmail1">Get our newsletter</label>
                    <input
                            type="email" class="form-control" placeholder="Enter email"></fieldset>
                <button type="submit" class="btn btn-outline-light">Submit</button>
            </form>
        </div>
    </div>

</div>


<!--    <div class="row  p-0 " style="background-color: black;">-->
<!--        <div class="col-10 mx-auto">-->
<!--            <div class="row">-->
<!--                <div class="p-4 col-md-3 text-white">-->
<!--                    <h2 class="mb-4">Pingendo</h2>-->
<!--                    <p>A company for whatever you may need, from website prototyping to publishing</p>-->
<!--                    <i class="mr-3 fa fa-twitter "></i>-->
<!--                    <i class="mr-3 fa fa-facebook"></i>-->
<!--                    <i class="mr-3 fa fa-google-plus"></i>-->
<!--                    <i class="mr-3 fa fa-pinterest-square"></i>-->

<!--                </div>-->
<!--                <div class="p-4 col-md-3 text-white">-->
<!--                    <h2 class="mb-4">Mapsite</h2>-->
<!--                    <ul class="list-unstyled text-white"><a href="#" class="text-white">Home</a> <br> <a href="#"-->
<!--                                                                                                         class="text-white">About-->
<!--                        us</a> <br> <a href="#" class="text-white">Our services</a> <br> <a href="#"-->
<!--                                                                                            class="text-white">Stories</a>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="p-4 col-md-3 text-white">-->
<!--                    <h2 class="mb-4">Contact</h2>-->
<!--                    <p><a href="#" class="text-white">-->
<!--                        <i class="fa d-inline mr-3 text-muted fa-phone"></i>+246 - 542 550 5462</a></p>-->
<!--                    <p><a href="#" class="text-white">-->
<!--                        <i class="fa d-inline mr-3 text-muted fa-envelope-o"></i>info@pingendo.com</a></p>-->
<!--                    <p><a href="#" class="text-white">-->
<!--                        <i class="fa d-inline mr-3 fa-map-marker text-muted"></i>365 Park Street, NY</a></p>-->
<!--                </div>-->
<!--                <div class="p-4 col-md-3 text-white">-->
<!--                    <h2 class="mb-4">Subscribe</h2>-->
<!--                    <form>-->
<!--                        <fieldset class="form-group"><label for="exampleInputEmail1">Get our newsletter</label> <input-->
<!--                                type="email" class="form-control" placeholder="Enter email"></fieldset>-->
<!--                        <button type="submit" class="btn btn-outline-light">Submit</button>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


</div>
<script
        src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
</script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script>

    var map;
    var geo;

    function init() {
        geo = new google.maps.Geocoder();
        var opt = {
            zoom: 15,
            // center: {
            //     // lat:31.2564,
            //     // lng:31.6597
            // }
        };
        map = new google.maps.Map(document.getElementById("map_canvas"), opt);
        var address = "{{ $sto->town}},+{{ $sto->address}},+Украина";

        geo.geocode({'address': address}, function (results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });
            } else {
                alert('Not valid address');
            }
        });

    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIsmDeJkfwTQJb0dZN-rFA1iJenf084aM"></script>
</body>
</html>
