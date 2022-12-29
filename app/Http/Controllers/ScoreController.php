<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $this->validate($request, ['points' => 'required|int']);

        $this->validate($request, ['pointer' => 'required']);

        $score = match ((int) $request->get('points')) {
            107     => 300,
            default => $request->get('points') * 2
        };

        return response()->json(compact('score'));
    }
}
