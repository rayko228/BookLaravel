@extends('layout')

@section('title')
    Company
@endsection

@section('main_content')
    <div class="container ">
        <div class="col-4 mx-auto text-center form p-4">
            <h1 class="align">Форма для Компании</h1><hr>
            <h3>Введите информацию ниже:</h3>
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

            <form action="{{route('library-form')}}" method="post" class="justify-content-center">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="name">
                </div>
                <div class="form-group">
                    <input type="text" name="libraryAddress" class="form-control" placeholder="libraryAddress">
                </div>
                <div class="form-group">
                    <input type="text" name="employeesCount" class="form-control" placeholder="employeesCount">
                </div>
                <div class="form-group">
                    <input type="text" name="libraryBudget" class="form-control" placeholder="libraryBudget">
                </div>
                <div class="form-group">
                    <input type="text" name="noiseLevel" class="form-control" placeholder="noiseLevel">
                </div>
                <div class="form-group">
                    <input type="text" name="booksRange" class="form-control" placeholder="booksRange">
                </div>
                <div class="form-group">
                    <input type="text" name="libraryType" class="form-control" placeholder="libraryType">
                </div>
                <div class="form-group">
                    <input type="text" name="employeesSkills" class="form-control" placeholder="employeesSkills">
                </div>
                <div class="form-group">
                    <input type="text" name="designInterior" class="form-control" placeholder="designInterior">
                </div>

                <input type="submit" value="Добавить!" class="btn btn-dark">
            </form>

            <a href="/"><input type="submit" value="Back!"  class="btn btn-dark"></a>
        </div>
    </div>
@endsection
