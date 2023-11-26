<?php

namespace App\Http\Controllers;

use App\Http\Resources\ATMResource;
use App\Models\User;
use App\Services\ATMService;
use Illuminate\Http\Request;

class ATMController extends Controller
{
    public function withdraw(Request $request, $userId, $amount)
    {
        $account = User::whereId($userId)->first();

        $withdrawalService = new ATMService();
        $result = $withdrawalService->withdraw($account, $amount);

        return new ATMResource([
            'message' => 'Əməliyyat uğurla tamamlandı',
            'remaining_balance' => $account->balance,
            'denominations' => $result,
        ]);
    }
}
