@extends('layout')

@section('title')
    Libraries
@endsection

@section('main_content')
    <div class="container">
        <div class="text-center">
            <a class="btn btn-success" href="{{route('library-create')}}">Add</a>
        </div>
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
        <table class="table">
            <thead class="thead-dark">
            <th>Id</th>
            <th>Name</th>
            <th>libraryAddress</th>
            <th>employeesCount</th>
            <th>libraryBudget</th>
            <th>noiseLevel</th>
            <th>booksRange</th>
            <th>libraryType</th>
            <th>employeesSkills</th>
            <th>designInterior</th>
            <th>Delete</th>
            </thead>
            <tbody>
            @foreach($libraries as $library)
                <tr>
                    <td> {{$library->id}} </td>
                    <td>  {{$library->name}}  </td>
                    <td>  {{$library->libraryAddress}}  </td>
                    <td>  {{$library->employeesCount}}  </td>
                    <td>  {{$library->libraryBudget}}  </td>
                    <td>  {{$library->noiseLevel}}  </td>
                    <td>  {{$library->booksRange}}  </td>
                    <td>  {{$library->libraryType}}  </td>
                    <td>  {{$library->employeesSkills}}  </td>
                    <td>  {{$library->designInterior}}  </td>
                    <td>  <form action="{{route('library-delete-form')}}"  method="post" class="justify-content-center">
                            @csrf

                                <input  type="hidden" name="id" class="form-control col-2" value="{{$library->id}}">
                            <input type="submit" class="btn btn-danger" value="X">
                        </form>  </td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
    </div>
@endsection
