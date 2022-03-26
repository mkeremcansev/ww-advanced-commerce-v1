<?php

namespace App\Http\Controllers\panel;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CampaignStoreRequest;
use App\Http\Requests\CampaignUpdateRequest;
use App\Models\Campaign;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns = Campaign::with('getAllCampaignAttributes')->get();
        return view('panel.campaign.index', ['campaigns' => $campaigns]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::with('getOneProductAttributes')->whereStatus(1)->get();
        return view('panel.campaign.create.index', ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CampaignStoreRequest $request)
    {
        DB::transaction(function () use ($request) {
            $campaign = Campaign::create([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'image' => Helper::imageUpload($request->image, 'storage'),
                'hash' => Str::random(15)
            ]);
            foreach ($request->products as $product) {
                $campaign->getAllCampaignAttributes()->create([
                    'product_id' => $product,
                    'hash' => Str::random(15)
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
        $campaign = Campaign::with('getAllCampaignAttributes')->findOrFail($id);
        $products = Product::with('getOneProductAttributes')->whereStatus(1)->get();
        return view('panel.campaign.update.index', ['campaign' => $campaign, 'products' => $products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CampaignUpdateRequest $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $campaign = Campaign::findOrFail($id);
            $update = [
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'hash' => Str::random(15)
            ];
            if ($request->hasFile('image')) {
                $update['image'] = Helper::imageUpload($request->image, 'storage');
            }
            $campaign->update($update);
            $campaign->getAllCampaignAttributes()->delete();
            foreach ($request->products as $product) {
                $campaign->getAllCampaignAttributes()->create([
                    'product_id' => $product,
                    'hash' => Str::random(15)
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
        Campaign::findOrFail($id)->delete();
        return back()->with('success', __('words.deleted_action_success'));
    }
}
