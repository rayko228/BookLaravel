@extends('layout')

@section('title')
    Book
@endsection

@section('main_content')
    <div class="container">
        <div class="text-center">
            <a class="btn btn-success" href="Book/create">Add</a>
            <a class="btn btn-danger" href="Book/delete">Delete</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
            <th>Id</th>
            <th>Name</th>
            <th>Volume</th>
            <th>ppm</th>
            <th>Color</th>
            <th>Quality</th>
            <th>Taste</th>
            <th>Sweet</th>
            <th>Dry</th>
            <th>Semisweet</th>
            <th>Price</th>
            <th>Country</th>
            <th>Producer</th>

            </thead>
            <tbody>
            @foreach($books as $Book)
                <tr>
                    <td> {{$Book->id}} </td>
                    <td>  {{$Book->name}}  </td>
                    <td>  {{$Book->volume}}  </td>
                    <td>  {{$Book->ppm}}  </td>
                    <td>  {{$Book->color}}  </td>
                    <td>  {{$Book->quality}}  </td>
                    <td>  {{$Book->taste}}  </td>
                    <td>  {{$Book->sweet}}  </td>
                    <td>  {{$Book->dry}}  </td>
                    <td>  {{$Book->semisweet}}  </td>
                    <td>  {{$Book->price}}  </td>
                    <td>  {{$Book->country}}  </td>
                    <td>  {{$Book->id}}  </td>
                </tr>
            @endforeach
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
        <form action="{{route('Book-delete-form')}}"  method="post" class="justify-content-center">
            @csrf
            <div class="form-group ">
                <label>What delete?</label>
                <input type="text" name="id" class="form-control col-2"placeholder="Id Алкоголя">
            </div>
            <input type="submit" value="Удалить!"class="btn btn-dark">
        </form>
    </div>
@endsection
