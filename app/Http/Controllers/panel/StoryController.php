<?php

namespace App\Http\Controllers\panel;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoryStoreRequest;
use App\Http\Requests\StoryUpdateRequest;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::with('getAllStoryAttributes')->get();
        return view('panel.story.index', ['stories'=>$stories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.story.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoryStoreRequest $request)
    {
        DB::transaction(function () use ($request) {
            $story = Story::create([
                'title'=>$request->title
            ]);
            foreach($request->stories as $s){
                $story->getAllStoryAttributes()->create([
                    'image'=>Helper::imageUpload($s['image'], 'storage')
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
        $story = Story::with('getAllStoryAttributes')->findOrFail($id);
        return view('panel.story.update.index', ['story'=>$story]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoryUpdateRequest $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $story = Story::findOrFail($id);
            $story->update([
                'title'=>$request->title
            ]);
            $story->getAllStoryAttributes()->delete();
            foreach($request->stories as $s){
                $story->getAllStoryAttributes()->create([
                    'image'=>Helper::imageUpload($s['image'], 'storage')
                ]);
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
        Story::findOrFail($id)->delete();
        return back()->with('success', __('words.deleted_action_success'));
    }
}
