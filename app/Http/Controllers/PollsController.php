<?php

namespace App\Http\Controllers;

use App\Poll;
use Illuminate\Http\Request;

class PollsController extends Controller
{
/**
 * @OA\Info(title="Naija Poll Documentation", version="0.1")
 */

/**
 * @OA\Get(
 *     path="/api/poll",
 *     @OA\Response(response="200", description="An example resource")
 * )
 */    
    public function index()
    {
        return response()->json(Poll::get(), 200);
    }

    public function show($id)
    {
        return response()->json(Poll::find($id), 200);
    }

    public function store(Request $request)
    {
        $poll = Poll::create($request->all());
        return response()->json($poll, 201);
    }
}
