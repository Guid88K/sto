<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('../css/bootstrap.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/main.css')}}">
</head>
<body>
<div class="container-fluid">
    <div class="row "
         style="background-image: url('../image/mainCar.jpg'); min-height: 790px; background-size: cover; background-position: center;  ">
        <div class="col-lg-12">

            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
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

                    <form class="typeahead" role="search" action="{{asset('/query')}}">
                        <div id="the-basics">
                            <input class="typeahead" name="search" type="text" placeholder="Town">
                            <button class="btn btn-outline-dark bg-dark  my-sm-0" name="Search" type="submit"><i
                                    class="fa fa-search text-white"></i></button>
                        </div>

                    </form>

                    {{--                    <form class="form-inline  my-2 my-lg-0 justify-content-start" action="{{asset('/query')}}"--}}
                    {{--                          method="get">--}}
                    {{--                        <input class="form-control border btn-outline-light mr-sm-2 w-75 pl-5" name="search"--}}
                    {{--                               type="search"--}}
                    {{--                               placeholder="  Search..."--}}
                    {{--                               aria-label="Search">--}}
                    {{--                        <button class="btn btn-outline-dark bg-dark  my-sm-0" name="Search" type="submit"><i--}}
                    {{--                                class="fa fa-search text-white"></i></button>--}}
                    {{--                    </form>--}}
                </div>
            </nav>
        </div>
    </div>
    <div class="row  pt-5  " style="  background: linear-gradient(to left, black, black,darkred);">
        <div class="col-lg-10 mx-auto mb-5">
            <div class="row">
                @foreach($sto as $s)
                    <div class="col-md-4  ">
                        <a href="{{ route('sto_public.show', ['id' => $s->id])}}">
                            <img class="img-fluid mb-3" style="width: 400px;height:200px "
                                 src="{{ asset('upload/'.$s->image)}}">
                        </a>
                        <p class="text-white">{{$s->address}}</p>
                        <p class="text-white">{{$s->town}}</p>
                    </div>
                @endforeach

                {{--                                        <div class="col-md-3 mx-auto ">--}}
                {{--                                            <img class="img-fluid mb-3" src="../image/photo_2019-08-05_16-02-25.jpg">--}}
                {{--                                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor in nostrum</p>--}}
                {{--                                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor in nostrum</p>--}}

                {{--                                        </div>--}}
                {{--                                        <div class="col-md-3 mx-auto ">--}}
                {{--                                            <img class="img-fluid mb-3" src="../image/photo_2019-08-05_16-02-25.jpg">--}}
                {{--                                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor in nostrum</p>--}}
                {{--                                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor in nostrum</p>--}}

                {{--                                        </div>--}}
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
                <ul class="list-unstyled text-white"><a href="#" class="text-white">Home</a> <br> <a href="#"
                                                                                                     class="text-white">About
                        us</a> <br> <a href="#" class="text-white">Our services</a> <br> <a href="#"
                                                                                            class="text-white">Stories</a>
                </ul>
            </div>
            <div class="p-4 col-md-3 text-white">
                <h2 class="mb-4">Contact</h2>
                <p><a href="#" class="text-white">
                        <i class="fa d-inline mr-3 text-muted fa-phone"></i>+246 - 542 550 5462</a></p>
                <p><a href="#" class="text-white">
                        <i class="fa d-inline mr-3 text-muted fa-envelope-o"></i>info@pingendo.com</a></p>
                <p><a href="#" class="text-white">
                        <i class="fa d-inline mr-3 fa-map-marker text-muted"></i>365 Park Street, NY</a></p>
            </div>
            <div class="p-4 col-md-3 text-white">
                <h2 class="mb-4">Subscribe</h2>
                <form>
                    <fieldset class="form-group"><label for="exampleInputEmail1">Get our newsletter</label> <input
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


    {{--    <div class="input-group mb-3">--}}

    {{--        <input type="text" class="form-control" aria-label="Text input with checkbox" name="services[]">--}}
    {{--        <div class="input-group-prepend">--}}
    {{--            <div class=" add_form_field_copy2 ">--}}
    {{--                <button class="btn btn-light bg-light my-2 my-sm-0" style="border-radius: 0px;" name="Search" type="submit"><i class="fa fa-plus text-dark"></i></button>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</div>

</div>
<script
    src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
</script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js')}}"></script>
<script>
    // jQuery(document).ready(function ($) {
    //
    //     var engine = new Bloodhound({
    //         remote: {
    //             url: '/find?q=%QUERY%',
    //             wildcard: '%QUERY%'
    //         },
    //         datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
    //         queryTokenizer: Bloodhound.tokenizers.whitespace
    //     });
    //
    //     $(".search-input").typeahead({
    //
    //         hint: true,
    //         highlight: true,
    //         minLength: 1
    //
    //     }, {
    //         source: engine.ttAdapter(),
    //         name: 'usersList',
    //         templates: {
    //             empty: [
    //                 '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
    //
    //             ],
    //             header: [
    //                 '<div class="list-group search-results-dropdown">'
    //             ],
    //             suggestion: function (data) {
    //                 return '<a href="' + data.town.name + '" class="list-group-item">' + data.name + ' - @' + data.town.name + '</a>'
    //             }
    //         }
    //     });
    // });
    var substringMatcher = function (strs) {
        return function findMatches(q, cb) {
            var matches, substringRegex;

            // an array that will be populated with substring matches
            matches = [];

            // regex used to determine if a string contains the substring `q`
            substrRegex = new RegExp(q, 'i');

            // iterate through the pool of strings and for any string that
            // contains the substring `q`, add it to the `matches` array
            $.each(strs, function (i, str) {
                if (substrRegex.test(str)) {
                    matches.push(str);
                }
            });

            cb(matches);
        };
    };

    var states = [];
    @foreach ($city as $t)

    states.push('{!! $t->name_town !!}');

    @endforeach
    $('#the-basics .typeahead').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        },
        {
            name: 'states',
            source: substringMatcher(states)
        });
</script>

</body>
</html>
