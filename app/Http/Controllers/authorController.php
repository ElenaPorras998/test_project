<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class authorController extends Controller
{
    //
    public function view()
    {
        $view = view('authors/add');
        $view->author= new Author;
        return $view;
    }

    public function add($id=null)
    {
        if($id)
        {
            //Place info of found author on variable
            $author = Author::findOrFail($id);

            //Fill the new register with information from the request
            $author->update([
                'name' => request()->input('name'),
                'year_of_birth' => request()->input('year_of_birth')
            ]);
        }
        else
        {
            //Create a new register in the authors table
            $author= new Author;
            $author->fill([
                'name' => request()->input('name'),
                'year_of_birth' => request()->input('year_of_birth')
            ]);
        }

        //Save the new register
        $author->save();

        //redirect to another page
        return redirect()->action('authorController@view');
    }

    public function edit($id=null)
    {
        //find the Actor or fail with the 404 error
        $author = Author::findOrFail($id);
        
        //prepare the edit view
        $view = view('authors/add');
        //put the actor object inside the view
        $view->author = $author;
        
        //render the view
        return $view;
    }

    public function listing()
    {
        $view = view('authors/list');
        
        $authors = Author::orderBy('name')->get();
        $view->authors = $authors;
        
        return $view;
    }
}
