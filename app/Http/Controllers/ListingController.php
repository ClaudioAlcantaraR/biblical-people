<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(16)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'job' => 'required',
            'birthplace' => 'nullable',
            'birthday' => 'nullable',
            'deathplace' => 'nullable',
            'deathdate' => 'nullable',
            'content' => 'required',
            'tags' => 'nullable',
        ]);

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/listings/manage')->with('message', 'Biografía creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'job' => 'required',
            'birthplace' => 'nullable',
            'birthday' => 'nullable',
            'deathplace' => 'nullable',
            'deathdate' => 'nullable',
            'content' => 'required',
            'tags' => 'nullable',
        ]);

        $listing->update($formFields);

        return back()->with('message', 'Biografía actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();

        return redirect('/listings/manage');
    }

    /**
     * Manage the listings
     * @param \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
