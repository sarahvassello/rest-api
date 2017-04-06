<?php

namespace App\Http\Controllers;

use App\Beer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class BeerController extends Controller
{
  public function index()
  {
    //shows all of the beer wish list
    //GET /beers function
    $beers = Beer::all();
    return Response::json($beers);
}

  public function create (Request $request)
  {
    //creates a new item to the beer wish list
    //POST /beers request
    Beer::create($request->all());
    return Response::json(['created' => true]);
  }

  public function show ($id)
  {
    //shows only one of the items in the table
    //GET /beers/$id
    $beers = Beer::find($id);
    return Response::json($beers);
  }

  public function update (Request $request, $id)
  {
    //updates a single item in the table
    //PUT /beers/$id request
    $beers = Beer::find($id);
    $success = $beers->update($request->all());
    return Response::json(['updated' => $success]);
  }

  public function destroy ($id) {
    //DELETE /beers/$id
    // remove a single order
    $beers = Beer::find($id);
    $beers->delete();
    return Response::json(['deleted' => true]);
  }
}
