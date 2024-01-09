<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class PaymentHistoryController extends Controller
{
    public function index()
    {
        $history = Transaction::where('user_id', Auth::user()->id)->paginate(5);

        $trans_detail = TransactionDetail::all();

        return view('paymentHistory', compact('history','trans_detail'));
    }
}
