<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //

    public function show()
    {
        $transaction = transaction::all();
        return View("transaction.tampil", ["transaction" => $transaction]);
    }
}
