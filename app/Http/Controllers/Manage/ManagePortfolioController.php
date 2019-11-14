<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Portfolio;
use Illuminate\Http\Request;

class ManagePortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = ['image' => 'имиджевый', 'reklama' => 'рекламный'];
        $portfolio = Portfolio::select(['id', 'title', 'description', 'type', 'date', 'url', 'published'])
            ->orderBy('id', 'DESC')
            ->get();

        return view('manage.portfolio', compact('portfolio', 'type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portfolio = new Portfolio();

        return view('manage.portfolio_create', compact('portfolio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortfolioRequest $request)
    {
        $portfolio = new Portfolio();
        $portfolio->fill($request->all());
        $portfolio->save();

        return redirect()
            ->route('manage.portfolio.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::select(['id', 'title', 'description', 'type', 'date', 'url', 'published'])
            ->findOrFail($id);

        return view('manage.portfolio_edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortfolioRequest $request, $id)
    {
//        dd(__METHOD__, $id, $request->all(), $request->published);

        $portfolio = Portfolio::select(['id', 'title', 'description', 'type', 'date', 'url', 'published'])
            ->findOrFail($id);
        $portfolio->fill($request->all());
        if (!$request->published) {
            $portfolio->published = false;
        }
        $portfolio->save();

        return redirect()
            ->route('manage.portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd(__METHOD__, $id);

        $portfolio = Portfolio::find($id);
        if ($portfolio) {
            $portfolio->delete();
        }
        return redirect()->route('manage.portfolio.index');
    }
}
