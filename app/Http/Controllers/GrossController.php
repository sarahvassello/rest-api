<?php

namespace App\Http\Controllers;

use App\Gross;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use App\Http\Requests;

class GrossController extends Controller
{
  public function index()
  {
    //shows list of all of the gross beer tried
    //GET /grosses function
    $grosses = Gross::all();
    return Response::json($grosses);
}

  public function create (Request $request)
  {
    //creates a new item to the gross beer list
    //POST /grosses request
    Gross::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show ($id)
  {
    //shows only one of the items in the gross beer table
    //GET /grosses/$id
    $grosses = Gross::find($id);
    return Response::json($grosses);
  }

  public function update (Request $request, $id)
  {
    //updates a single item in the gross beer table
    //PUT /grosses/$id request
    $grosses = Gross::find($id);
    $success = $grosses->update($request->all());
    return Response::json(['updated' => $success]);
  }

  public function destroy ($id) {
    //DELETE /grosses/$id
    // remove a single gross beer. Good for the user for expanding their palate.
    $grosses = Gross::find($id);
    $grosses->delete();
    return Response::json(['deleted' => true]);
  }
}
