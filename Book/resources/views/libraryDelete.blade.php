@extends('layout')

@section('title')
    Book
@endsection

@section('main_content')
    <table class="table">
        <thead class="thead-dark">
        <th>Id</th>
        <th>Name</th>
        <th>Организация товара</th>
        <th>Количество полок</th>
        <th>Асортимент</th>
        <th>Консультация</th>
        <th>Количество товара</th>
        <th>Наличие полок</th>
        <th>Защита от падения</th>
        <th>Освещение</th>
        <th>Сигнализация</th>
        </thead>
        <tbody>
        @foreach($libraries as $library)
            <tr>
                <td> {{$library->id}} </td>
                <td>  {{$library->name}}  </td>
                <td>  {{$library->arrangementOfGoods}}  </td>
                <td>  {{$library->numberOfShelves}}  </td>
                <td>  {{$library->wideAssortment}}  </td>
                <td>  {{$library->availabilityOfaConsultant}}  </td>
                <td>  {{$library->quantityOfGoods}}  </td>
                <td>  {{$library->availabilityOfSeveralShelves}}  </td>
                <td>  {{$library->presenceOfAProtectiveSideAgainstFalling}}  </td>
                <td>  {{$library->sufficientLighting}}  </td>
                <td>  {{$library->alarm}}  </td>
            </tr>
        @endforeach
                    </tbody>
    </table>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('company-delete-form')}}"  method="post" class="justify-content-center">
        @csrf
        <div class="form-group ">
            <label>What delete?</label>
            <input type="text" name="id" class="form-control col-2"placeholder="Id Компании">
        </div>
        <input type="submit" value="Delete Task!"class="btn btn-dark">
    </form>

            <a href="/"><input type="submit" value="Back!"  class="btn btn-dark"></a>
        </div>
    </div>
@endsection


