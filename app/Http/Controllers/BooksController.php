<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Books;
use Brian2694\Toastr\Facades\Toastr;

class BooksController extends Controller
{
    public function index()
    {
        //
    }
    public function viewAddBooksForm()
    {
        return view('admin.layouts.app');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addBooks(Request $request)
    {
        $input = $request->all();

        
        // $image_path = $request->file('image')->store('public/apiProduct');

        if ($request->hasFile('coverImg')) {
            $filename = $request->coverImg->getClientOriginalName();
            $file_path = $request->coverImg->storeAs('newBooks', $filename, 'public');
        }

        if ($request->hasFile('bookPdf')) {
            $filename = $request->bookPdf->getClientOriginalName();
            $coverImg = $request->bookPdf->storeAs('bookCover', $filename, 'public');
        }


        Books::create([
            'bookName'         => $input['bookName'],
            'author'           => $input['author'],
            'language'         => $input['language'],
            'price'            => $input['price'],            
            'description'      => $input['description'],
            'coverImg'         => $coverImg,
            'bookPdf'          => $file_path, 
        ]);

        return back()->with(Toastr::success('Task has successfully created!','Success'));
    }
}