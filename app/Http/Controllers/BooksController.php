<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\User;
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
use Book;

class BooksController extends Controller
{
    public function index()
    {

    }
}
