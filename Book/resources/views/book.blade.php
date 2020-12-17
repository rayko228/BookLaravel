@extends('layout')

@section('title')
    Book
@endsection

@section('main_content')
    <div class="container">
        <div class="text-center">
            <a class="btn btn-success" href="{{route('book-create')}}">Add</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
            <th>Id</th>
            <th>Name</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Year</th>
            <th>pagesNumber</th>
            <th>bookPublishing</th>
            <th>coverType</th>
            <th>psychologicalLoad</th>
            <th>bookLanguage</th>
            <th>authorsNumber</th>
            <th>library_id</th>
            <th>Delete</th>

            </thead>
            <tbody>
            @foreach($books as $Book)
                <tr>
                    <td> {{$Book->id}} </td>
                    <td>  {{$Book->name}}  </td>
                    <td>  {{$Book->bookAuthor}}  </td>
                    <td>  {{$Book->bookGenre}}  </td>
                    <td>  {{$Book->bookYear}}  </td>
                    <td>  {{$Book->pagesNumber}}  </td>
                    <td>  {{$Book->bookPublishing}}  </td>
                    <td>  {{$Book->coverType}}  </td>
                    <td>  {{$Book->psychologicalLoad}}  </td>
                    <td>  {{$Book->bookLanguage}}  </td>
                    <td>  {{$Book->authorsNumber}}  </td>
                    <td>  {{$Book->library_id}}  </td>
                    <td> <form action="{{route('book-delete-form')}}"  method="post" class="justify-content-center">
                            @csrf

                            <input  type="hidden" name="id" class="form-control col-2" value="{{$Book->id}}">
                            <input type="submit" class="btn btn-danger" value="X">
                        </form>  </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
