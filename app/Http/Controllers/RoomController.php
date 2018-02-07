<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        // $this->middleware('auth')->except('index', 'show')
    }
    
    /**
     * Show all rooms
     */
    public function Index()
    {
        $rooms = Room::all();
        
        return response()->json($rooms);
    }

    /**
     * Show one room
     */
    public function show($id)
    {
        $room = Room::find($id);

        return response()->json($room);
    }

    /**
     * Create new room
     */
    public function create(Request $request)
    {
        $room = Room::create($request->all());

        return response()->json($room, 201);
    }

    /**
     * Edit existing room
     */
    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $room->update($request->all());

        return response()->json($room, 200);
    }

    /**
     * Delete existing room
     */
    public function delete($id)
    {
        Room::findOrFail($id)->delete();

        return response('Deleted Successfully', 200);
    }
}
