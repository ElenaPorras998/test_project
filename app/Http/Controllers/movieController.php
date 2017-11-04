<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use App\Movie;

class movieController extends Controller
{
    //
    public function view()
    {
        $view = view('movies/add');
        $view->movie= new Movie;
        $authors = Author::orderBy('name')->get();
        $view->authors = $authors;
        return $view;
    }

    public function add($id=null)
    {
        if($id)
        {
            //Place info of found author on variable
            $movie = Movie::findOrFail($id);

            //Fill the new register with information from the request
            $movie->update([
                'title' => request()->input('title'),
                'author_id' => request()->input('authors'),
                'published_at' => request()->input('published_at'),
                'finished_reading_at' => request()->input('finished_reading_at'),
                'my_review' => request()->input('my_review'),
                'my_rating' => request()->input('my_rating') 
            ]);
        }
        else
        {
            //Create a new register in the authors table
            $movie= new Movie;
            $movie->fill([
                'title' => request()->input('title'),
                'author_id' => request()->input('authors'),
                'published_at' => request()->input('published_at'),
                'finished_reading_at' => request()->input('finished_reading_at'),
                'my_review' => request()->input('my_review'),
                'my_rating' => request()->input('my_rating')
            ]);
        }

        //Save the new register
        $movie->save();

        //redirect to another page
        return redirect()->action('movieController@view');
    }

    public function edit($id=null)
    {
        //find the Actor or fail with the 404 error
        $movie = Movie::findOrFail($id);
        
        //prepare the edit view
        $view = view('movies/add');
        //put the actor object inside the view
        $view->movie = $movie;
        $authors = Author::orderBy('name')->get();
        $view->authors = $authors;
        
        //render the view
        return $view;
    }

    public function listing()
    {
        $view = view('movies/list');
        
        $movies = Movie::orderBy('title')->get();
        $view->movies = $movies;
        
        return $view;
    }

    public function detail($id=null)
    {
        $view = view('movies/detail');
        
        $movie = Movie::where('id', $id)->get();
        $view->movie = $movie[0];

        $author_id = $movie[0]->author_id;

        $author = Author::where('id', $author_id)->get();
        $view->author = $author[0];        
        
        return $view;
    }
}
