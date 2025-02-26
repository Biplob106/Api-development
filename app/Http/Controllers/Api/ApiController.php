<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api;

class ApiController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Hello World']);
    }
    public function createapi(Request $request)
    {
        $api = new Api();
        $api->name = $request->name;
        $api->email = $request->email;
        $api->address = $request->address;
        $api->phone = $request->phone;
        $api->description = $request->description;
        $api->save();
        return response()->json(['message' => 'Api created successfully']);
    }
    public function updateapi(Request $request, $id)
    {
        $api = Api::find($id);
        $api->name = $request->name;
        $api->email = $request->email;
        $api->address = $request->address;
        $api->phone = $request->phone;
        $api->description = $request->description;
        $api->save();
        return response()->json(['message' => 'Api updated successfully']);
    }

    public function deleteapi($id)
    {
        $api = Api::find($id);
        $api->delete();
        return response()->json(['message' => 'Api deleted successfully']);
    }

    public function getapi($id)
    {
        $api = Api::find($id);
        return response()->json($api);
    }
}
