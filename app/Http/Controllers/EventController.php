<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Support\Facades\DB;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('promos/promo', [
            'title' => 'Available Promos',
            'events' => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        // $products = DB::table('products')
        //     ->join('promos', 'products.promo_id', '=', 'promos.id')
        //     ->join('events', 'promos.event_id', '=', 'events.id')
        //     ->select('promos.*', 'events.*','products.*')
        //     ->where('events.id', '=', $event)
        //     ->get();
        //     $event = Event::find($event);

   // Fetch the event

// Load the relations for the event
$event->load('promos.products');

// Access the loaded relations
$promos = $event->promos; // Access promos related to the event
$products = $promos->flatMap->products; // Access products related to the promos

// Now you can work with the loaded relations ($promos and $products)

        return view('promos/promo_detail', [
            'title' => ' Sale',
            'products' => $products,
            'event' => $event
        ]);
                // return json_encode($products);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
