<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Carbon\Carbon;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use File;
use Hash;
use Illuminate\Http\Request;
use Lang;
use Mail;
use Redirect;
use Sentinel;
use URL;
use View;
use Datatables;
use Validator;

class BooksController extends Controller
{

	/**
     * Show a list of all the books.
     *
     * @return View
     */
    public function index()
    {
    	$books = Book::all();
    	return view('admin.books.index', compact('books'));
    }

    /*
     * Pass data through ajax call
     */
    public function data()
    {
        $books = Book::get(['id', 'name', 'created_at']);
        return Datatables::of($books)
            ->edit_column('created_at',function(Book $book) {
                return $book->created_at->diffForHumans();
            })
            
            ->add_column('actions',function($book) {
                $actions = '<a href='. route('admin.books.show', $book->id) .'><i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view book"></i></a>
                            <a href='. route('admin.books.edit', $book->id) .'><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="update book"></i></a>
                            <a href='. route('admin.books.confirm-delete', $book->id) .' data-toggle="modal" data-target="#delete_confirm"><i class="livicon" data-name="book-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete book"></i></a>';

                
                return $actions;
            }

    )
            ->make(true);
    }

    /**
     * Display specified book.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
    	try {
    	    // Get the user information
    	    $book = Book::find($id);

    	} catch (BookNotFoundException $e) {
    	    // Prepare the error message
    	    $error = Lang::get('books/message.book_not_found', compact('id'));

    	    // Redirect to the user management page
    	    return Redirect::route('admin.books.index')->with('error', $error);
    	}

    	// Show the page
    	return view('admin.books.show', compact('book'));
    }

    /**
     * Book update.
     *
     * @param  int $id
     * @return View
     */
    public function edit()
    {

    }

    /**
     * Delete Confirm
     *
     * @param   int $id
     * @return  View
     */
    public function getModalDelete($id = null)
    {
        // $model = 'users';
        // $confirm_route = $error = null;
        // try {
        //     // Get user information
        //     $user = Sentinel::findById($id);

        //     // Check if we are not trying to delete ourselves
        //     if ($user->id === Sentinel::getUser()->id) {
        //         // Prepare the error message
        //         $error = Lang::get('users/message.error.delete');

        //         return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        //     }
        // } catch (UserNotFoundException $e) {
        //     // Prepare the error message
        //     $error = Lang::get('users/message.user_not_found', compact('id'));
        //     return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        // }
        // $confirm_route = route('admin.users.delete', ['id' => $user->id]);
        // return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
    }
}
