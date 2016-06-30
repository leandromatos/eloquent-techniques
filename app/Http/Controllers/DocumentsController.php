<?php

namespace App\Http\Controllers;

use App\Document;

class DocumentsController extends Controller
{
    public function show(Document $document)
    {
        return view('documents.show')->withDocument($document);
    }
}
