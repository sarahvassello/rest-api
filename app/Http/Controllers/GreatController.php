<?php

namespace App\Http\Controllers;

use App\Great;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use App\Http\Requests;

class GreatController extends Controller
{
  public function index()
  {
    //shows list of all of the great beer tried
    //GET /greats function
    $greats = Great::all();
    return Response::json($greats);
}

  public function create (Request $request)
  {
    //creates a new item to the great beer list
    //POST /greats request
    Great::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show ($id)
  {
    //shows only one of the items in the great beer table
    //GET /greats/$id
    $greats = Great::find($id);
    return Response::json($greats);
  }

  public function update (Request $request, $id)
  {
    //updates a single item in the great beer table
    //PUT /greats/$id request
    $greats = Great::find($id);
    $success = $greats->update($request->all());
    return Response::json(['updated' => $success]);
  }

  public function destroy ($id) {
    //DELETE /greats/$id
    // remove a single great beer. Sorry, user.
    $greats = Great::find($id);
    $greats->delete();
    return Response::json(['deleted' => true]);
  }
}
