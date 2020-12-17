<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Http\Requests\LibraryRequest;
use App\Models\Book;
use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class BookController extends Controller
{

    public function create(LibraryRequest $req)
    {
        $library = new Library();
        $library->name = $req->input('name');
        $library->libraryAddress = $req->input('libraryAddress');
        $library->employeesCount = $req->input('employeesCount');
        $library->libraryBudget = $req->input('libraryBudget');
        $library->noiseLevel =$req->input('noiseLevel');
        $library->booksRange = $req->input('booksRange');
        $library->libraryType = $req->input('libraryType');
        $library->employeesSkills = $req->input('employeesSkills')  ;
        $library->designInterior = $req->input('designInterior');

        $library->save();

        return Redirect()->route('company-list');
    }
    public function createBook(BookRequest $req)
    {

        $Book = new Book();
        $Book->name = $req->input('name');
        $Book->bookAuthor = $req->input('bookAuthor');
        $Book->bookGenre = $req->input('bookGenre');
        $Book->bookYear = $req->input('bookYear');
        $Book->pagesNumber =$req->input('pagesNumber');
        $Book->bookPublishing = $req->input('bookPublishing');
        $Book->coverType = $req->input('coverType');
        $Book->psychologicalLoad = $req->input('psychologicalLoad');
        $Book->bookLanguage = $req->input('bookLanguage');
        $Book->library_id = (int)$req->input('library_id');
        $Book->authorsNumber = $this->radiobutton($req->input( 'authorsNumber'));
        $Book->save();

        return Redirect()->route('book-list');
    }
    public function delete(Request $request){
        $id = $request->validate([
            'id' => 'required',
        ]);
        $id=$request->input('id');

        $library= Library::find($id);
        var_dump($id);
        if($library!=null){
            $library->delete();
        }else{
            return redirect()->back()->withErrors("Enter correct ID");
        }
        return Redirect()->route('company-list');
    }
    public function deleteBook(Request $request){
        $id = $request->validate([
            'id' => 'required',
        ]);
        $id=$request->input('id');

        $library= Book::find($id);
        var_dump($id);
        if($library!=null){
            $library->delete();
        }else{
            return redirect()->back()->withErrors("Enter correct ID");
        }
        return Redirect()->route('book-list');
    }
    private function radiobutton ($radio){
        if($radio=="on"){
            return 1;
        }else{return 0;}
    }
}
