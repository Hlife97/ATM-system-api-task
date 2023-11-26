<?php

namespace App\Http\Controllers;

use App\Models\TransactionHistory;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function delete($id)
    {
        $transaction = TransactionHistory::find($id);

        if ($transaction) {
            $transaction->delete();
            return response()->json(['message' => 'Əməliyyat uğurla silindi']);
        } else {
            return response()->json(['message' => 'Belə bir əməliyyat tapılmadı'], 404);
        }
    }
}
