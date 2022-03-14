<?php

namespace App\Http\Controllers\panel;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ShowcaseStoreRequest;
use App\Http\Requests\ShowcaseUpdateRequest;
use App\Models\Showcase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowcaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showcases = Showcase::with('getAllShowcaseAttributes')->get();
        return view('panel.showcase.index', ['showcases'=>$showcases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.showcase.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShowcaseStoreRequest $request)
    {
        DB::transaction(function () use ($request) {
            $showcase = Showcase::create([
                'title'=>$request->title
            ]);
            foreach($request->showcases as $s){
                $showcase->getAllShowcaseAttributes()->create([
                    'image'=>Helper::imageUpload($s['image'], 'storage'),
                    'category_id'=>$s['category_id'],
                    'url'=>$s['url'] ? $s['url'] : null
                ]);
            }
        });
        return back()->with('success', __('words.created_action_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $showcase = Showcase::with('getAllShowcaseAttributes')->findOrFail($id);
        return view('panel.showcase.update.index', ['showcase'=>$showcase]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShowcaseUpdateRequest $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $showcase = Showcase::findOrFail($id);
            $showcase->update([
                'title'=>$request->title
            ]);
            foreach($request->showcases as $s){
                $update = [
                    'category_id'=>$s['category_id'],
                    'url'=>$s['url'] ? $s['url'] : null,
                ];
                if(isset($s['image'])) {
                    $update['image'] = Helper::imageUpload($s['image'], 'storage');
                }
                $showcase->getAllShowcaseAttributes()->findOrFail($s['id'])->update($update);
            }
        });
        return back()->with('success', __('words.updated_action_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Showcase::findOrFail($id)->delete();
        return back()->with('success', __('words.deleted_action_success'));
    }
}
