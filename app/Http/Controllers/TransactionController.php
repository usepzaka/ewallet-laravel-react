<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class TransactionController extends Controller
{
    /**
     * Show Topup Form
     */
    public function topup(Request $request): Response
    {
        return Inertia::render('Transaction/Transaction');
        // return Inertia::render('Transaction/Topup', [
        //     'status' => session('status'),
        // ]);
    }
}
