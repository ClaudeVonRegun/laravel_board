<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tweets = Tweet::with('user')->latest()->get();

        return view('tweets.index', compact('tweets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('tweets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      Tweet::create([
        'user_id' => Auth::id(),
        'tweet' => $request->tweet,
      ]);
    
      return redirect()->route('tweets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tweet = Tweet::with('user')->findOrFail($id);
        $replies = $tweet->replies()->with('user')->latest()->get();

        return view('tweets.show', compact(['tweet', 'replies']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
