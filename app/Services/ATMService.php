<?php

namespace App\Services;

use App\Models\TransactionHistory;
use App\Models\User;

class ATMService
{
    public function withdraw(User $user, $amount)
    {
        if ($user->balance >= $amount) {
            $denominations = $this->calculateDenominations($amount);

            $user->balance -= $amount;
            $user->save();

            $this->recordTransaction($user, $amount, 'withdrawal');

            return response()->json([
                'message' => 'Əməliyyat uğurla tamamlandı',
                'remaining_balance' => $user->balance,
                'denominations' => $denominations,
            ]);
        } else {
            return response()->json(['message' => 'Kifayət qədər vəsait yoxdur'], 400);
        }
    }

    private function calculateDenominations($amount)
    {
        $denominations = [200, 100, 50, 20, 10, 5, 1];
        $result = [];

        foreach ($denominations as $denomination) {
            $count = floor($amount / $denomination);
            if ($count > 0) {
                $result["$denomination AZN"] = $count;
                $amount %= $denomination;
            }
        }

        return $result;
    }

    private function recordTransaction($user, $amount, $type)
    {
        $transaction = new TransactionHistory([
            'user_id' => $user->id,
            'amount' => $amount,
            'transaction_type' => $type,
        ]);

        $transaction->save();
    }
}