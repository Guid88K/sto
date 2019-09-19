@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-3">

        </div>

        <div class="col-6">
            <form method="post" action="{{ route('sto.store') }}" enctype="multipart/form-data">
                <div class="form-group ">
                    @csrf
                    <label for="name">Назва</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="author">Зображення:</label>
                        <input type="file" class="form-control" name="image"/>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name">Місто</label>
                    <input list="town" name="town" value="" class="col-sm-6 custom-select custom-select-sm">
                    @foreach($town as $t)
                    <datalist id="town">
                        <option value="{{$t->name_town}}">{{$t->name_town}}</option>
                    </datalist>
                        @endforeach
                </div>

                <div class="form-group ">
                    <label for="name">Адрес</label>
                    <input type="text" class="form-control" name="address"/>
                </div>
                <div class="form-group ">
                    <label for="name">Опис</label>
                    <textarea type="text" class="form-control" name="description" rows="3"></textarea>
                </div>

                <div class="container2">
                    <label for="exampleFormControlInput1">Контакти:</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Text input with checkbox" name="contact[]"/>
                        <div class="input-group-prepend">
                            <div class="input-group-text  add_form_field_copy ">
                                <i class="fa fa-plus text-dark"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="name">Дата</label>
                    <input type="text" class="form-control" name="data"/>
                </div>
                <div class="form-group ">
                    <label for="name">Година</label>
                    <input type="text" class="form-control" name="hour"/>
                </div>
{{--                <div class="form-group row">--}}
{{--                    <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>--}}
{{--                    <div class="col-10">--}}
{{--                        <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">--}}
{{--                    </div>--}}
{{--                </div>--}}

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
