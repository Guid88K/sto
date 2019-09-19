@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-3">

        </div>

        <div class="col-6">
            <form method="post" action="{{ route('sto.update',$sto->id) }}" enctype="multipart/form-data">
                <div class="form-group ">
                    @method('PATCH')
                    @csrf
                    <label for="name">Назва</label>
                    <input type="text" class="form-control" value="{{$sto->name}}" name="name"/>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="author">Зображення:</label>
                        <input type="file" class="form-control" value="{{$sto->image}}" name="image"/>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name">Місто</label>
                    <input type="text" class="form-control" value="{{$sto->town}}" name="town"/>
                </div>
                <div class="form-group ">
                    <label for="name">Адрес</label>
                    <input type="text" class="form-control" value="{{$sto->address}}" name="address"/>
                </div>
                <div class="form-group ">
                    <label for="name">Опис</label>
                    <input type="text" class="form-control" value="{{$sto->description}}" name="description"/>
                </div>

                <div class="container2">
                    <label for="exampleFormControlInput1">Контакти:</label>
                    @foreach($contact as $c)
                        @if ($loop->first)
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Text input with checkbox"
                                       value="{{$c->contact}}" name="contact[]"/>
                                <div class="input-group-prepend">
                                    <div class="input-group-text  add_form_field_copy ">
                                        <i class="fa fa-plus text-dark"></i>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (!($loop->first))
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Text input with checkbox"
                                       name="contact[]" value="{{$c->contact}}">
                                <div class="input-group-prepend delete">
                                    <div class="input-group-text">
                                        <i class="fa fa-minus text-dark">
                                        </i></div>
                                </div>
                            </div>

                        @endif
                    @endforeach

                    <label for="name">Робочі дні в тижні</label>
                    <div class="form-group row">
                        <select class="ml-3 col-2 form-control" name="start_date" >
                            <option selected="selected">Пн</option>
                            <option>Вт</option>
                            <option>Ср</option>
                            <option>Чт</option>
                            <option>Пт</option>
                            <option>Сб</option>
                            <option>Нд</option>
                        </select>

                        <select class="ml-3 col-2 form-control" name="end_date">
                            <option>Пн</option>
                            <option>Вт</option>
                            <option>Ср</option>
                            <option>Чт</option>
                            <option selected="selected">Пт</option>
                            <option>Сб</option>
                            <option>Нд</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="example-time-input">Година відкриття</label>
                        <input class="form-control" type="time" value="{{$sto->start_hour}}" name="start_hour" id="start_hour" >
                    </div>
                    <div class="form-group">
                        <label for="example-time-input" class=" col-form-label">Година закриття</label>
                        <input class="form-control" type="time" value="{{$sto->end_hour}}" name="end_hour" id="end_hour">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark">Сохранить</button>
                </div>
            </form>

        </div>

        <div class="col-3">

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            var max_fields = 10;
            var wrapper2 = $(".container2");
            var add_button1 = $(".add_form_field_copy");

            var y = 1;
            $(add_button1).click(function (e) {
                e.preventDefault();
                if (y < max_fields) {
                    y++;
                    $(wrapper2).append('<div class="input-group mb-3"><input type="text" class="form-control" aria-label="Text input with checkbox" name="contact[]"><div class="input-group-prepend delete"><div class="input-group-text   "> <i class="fa fa-minus text-dark" ></i></div> </div></div>'); //add input box
                } else {
                    alert('You Reached the limits')
                }
            });
            $(wrapper2).on("click", ".delete", function (e) {
                e.preventDefault();
                $(this).parent('div').remove();
                y--;
            });
        });
    </script>
@endsection
