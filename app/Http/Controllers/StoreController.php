<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Http\Controllers\Controller;

use Request;
use App\Store;
use Auth;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('store.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store.create', ['store' => new Store]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('img_pp')) {
            
            $file = $request->file('img_pp');
            
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('uploads', $fileName);

            $data['pp'] = $fileName;
        }

        if ($request->hasFile('img-cover')) {
            
            $file = $request->file('img-cover');
            
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('uploads', $fileName);

            $data['cover'] = $fileName;
        }

        $data['user_id'] = Auth::user()->id;

        $store = Store::create($data);

        return redirect('store/'.$store->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        return view('store.show', ['store' => $store]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        return view('store.edit', ['store' => $store]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, Store $store)
    {
        $data = $request->all();

        if ($request->hasFile('img_pp')) {
            
            $file = $request->file('img_pp');
            
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('uploads', $fileName);

            $data['pp'] = $fileName;
        }

        if ($request->hasFile('img_cover')) {
            
            $file = $request->file('img_cover');
            
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('uploads', $fileName);

            $data['cover'] = $fileName;
        }

        $store->update($data);

        return redirect('store/'.$store->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getList()
    {
        $r              = Request::all();
        
        $sortColumn     = $r['columns'][$r['order'][0]['column']]['data'];
        $sortOrder      = $r['order'][0]['dir'];
        $searchValue    = '%'.$r['search']['value'].'%';

        $products = Store::all();

        $filtered = Store::where('name', 'LIKE', $searchValue)
            ->orWhere('description', 'LIKE', $searchValue)
            ->orWhere('phone', 'LIKE', $searchValue)
            ->orderBy($sortColumn, $sortOrder);

        return [
            'draw'              => $r['draw'],
            'recordsTotal'      => count($filtered->get()),
            'recordsFiltered'   => count($filtered->get()),
            'data'              => $filtered->limit($r['length'])
                                        ->offset($r['start'])
                                        ->get()
        ];
    }
}
