<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiscussionRequest;
use App\Http\Controllers\Controller;

use App\Discussion;
use Auth;

class DiscussionController extends Controller
{
    public function store(DiscussionRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        Discussion::create($data);

        return redirect('/product/'.$request->get('product_id'));
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
}
