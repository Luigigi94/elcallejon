<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Board;
use App\Models\Category;
use App\Models\Commands;
use App\Models\Product;
use App\Models\Ticket;
use App\Models\Ticket_Commands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommandsController extends Controller
{

    public function index()
    {
        return 'estas en el index';
    }

    public function order($id)
    {
        $firsttry = DB::select('SELECT products.name, product_images.image, products.price, commands.quantity FROM products, commands, product_images
WHERE product_images.product_id = products.id AND commands.product_id = products.id;');
        return view('admin.commands.order')->with(compact('id','firsttry'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Commands $commands, Request $request)
    {
        $laurl = $request->url();
        $commandas = substr($laurl,-1);
        $products = Product::all();
        $categories = Category::all();
        if (\request()->ajax()){
            return view('admin.boards.useboard')->with( compact('commandas','products','categories','commands'));

        }
        return view('admin.boards.useboard')->with( compact('commandas','products','categories','commands'));
    }

    public function store(Request $request)
    {
//        $multi = ;


        $board = Board::find($request->commandas);
        $ticket = DB::table('tickets')
            ->where('board_id','=',$request->commandas)
            ->where('status_id','=',3)
            ->get();

        if ($board->status_id === 1){
            $ticket = DB::table('tickets')
                ->where('board_id','=',$request->commandas)
                ->where('status_id','=',3)
                ->get();

            if ($ticket->isEmpty()){
                $ticket = Ticket::create([
                   'board_id' => $request->commandas,
                   'status_id' => 3,
                   'user_id' => auth()->id(),
                   'total' => 0
                ]);
            }

            $board->status_id = 2;
            $board->save();

            $commands = Commands::create([
                'quantity' => $request->quantity,
                'product_id' => $request->product_id,
                'board_id' => $request->commandas
            ]);
        }elseif ($board->status_id === 2 && $ticket[0]->status_id === 3){
            $commands = Commands::create([
                'quantity' => $request->quantity,
                'product_id' => $request->product_id,
                'board_id' => $request->commandas,
                'subtotal' => ($request->quantity * $request->price)
            ]);
        }

        return back();
    }

    public function dataproduct($id)
    {
        if (\request()->ajax()){
            $data = Product::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }


}
