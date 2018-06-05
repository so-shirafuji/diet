<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\review;    // add


class reviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
      public function index()
    {
        $reviews = review::all();

        return view('reviews.index', [
            'reviews' => $reviews,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $review = new review;

        return view('reviews.create', [
            'review' => $review,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = new review;
        $review->name = $request->name;
        $review->weight = $request->weight;
        $review->morning = $request->morning;
        $review->lunch = $request->lunch;
        $review->dinner= $request->dinner;
        $review->content = $request->content;
        $review->save();
       
       return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $review = review::find($id);

        return view('reviews.show', [
            'review' => $review,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $review = review::find($id);

        return view('reviews.edit', [
            'review' => $review,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $review = review::find($id);
        $review->name = $request->name;
        $review->weight = $request->weight;
        $review->morning = $request->morning;
        $review->lunch = $request->lunch;
        $review->dinner= $request->dinner;
        $review->content = $request->content;
        $review->save();
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = review::find($id);
        $review->delete();

        return redirect('/');

    }
}
