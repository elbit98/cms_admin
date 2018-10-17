<?php

namespace Modules\News\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\News\Entities\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $news = News::paginate(5);
        return view('news::index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('news::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $user = $request->user();

        $news = News::create($request->all() + ['author' => $user->id]);

        return view('news::show', compact('news'));

    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(News $news)
    {
        return view('news::show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(News $news)
    {
        return view('news::edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(News $news, Request $request)
    {

        $news = $news->update($request->all());

        return view('news::show', compact('news'));

    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
