@extends('layout')

@section('title')
    Book
@endsection

@section('main_content')
    <div class="container ">
        <div class="col-4 mx-auto text-center form p-4">
            <h1 class="align">Форма для Алкоголя</h1><hr>
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

            <form action="{{route('book-form')}}" method="post" class="justify-content-center">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="name">
                </div>
                <div class="form-group">
                    <input type="text" name="bookAuthor" class="form-control" placeholder="bookAuthor">
                </div>
                <div class="form-group">
                    <input type="text" name="bookGenre" class="form-control" placeholder="bookGenre">
                </div>
                <div class="form-group">
                    <input type="date" name="bookYear" class="form-control" placeholder="bookYear">
                </div>
                <div class="form-group">
                    <input type="text" name="pagesNumber" class="form-control" placeholder="pagesNumber">
                </div>
                <div class="form-group">
                    <input type="text" name="bookPublishing" class="form-control" placeholder="bookPublishing">
                </div>
                <div class="form-group">
                    <input type="text" name="coverType" class="form-control" placeholder="coverType">
                </div>
                <div class="form-group">
                    <input type="text" name="psychologicalLoad" class="form-control" placeholder="psychologicalLoad">
                </div>
                <div class="form-group">
                    <input type="text" name="bookLanguage" class="form-control" placeholder="bookLanguage">
                </div>
                <div class="form-group">
                    <input type="text" name="authorsNumber" class="form-control" placeholder="authorsNumber">
                </div>

                <div class="form-group">
                    <select class="form-control" name="library_id">
                        <option value="N/A">library</option>
                        @foreach($libraries as $library)
                            <option value="{{$library->id}}">{{$library->name}}</option>
                        @endforeach
                    </select>
                </div>

                <input type="submit" value="Добавить!"class="btn btn-dark">
            </form>

            <a href="/"><input type="submit" value="Back!"  class="btn btn-dark"></a>
        </div>
    </div>
@endsection


