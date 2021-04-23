<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Board;
use App\Models\Category;
use App\Models\Commands;
use App\Models\Product;
use App\Models\Status;
use App\Models\Ticket;
use App\Models\Ticket_Commands;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Crabbly\Fpdf;

class CommandsController extends Controller
{

    public function index()
    {
        return 'estas en el index';
    }

    public function order($id)
    {
        $firsttry = DB::select('
SELECT product_images.image, products.id, products.name,  products.price, commands.id, commands.quantity, commands.subtotal
FROM products, boards, commands, product_images
WHERE products.id = commands.product_id AND product_images.product_id = products.id AND commands.board_id = boards.id AND boards.id = '.$id.' and product_images.featured = 1 AND commands.status_id = 3;');
        $suma = DB::select("SELECT SUM(subtotal) AS sum FROM `commands` WHERE commands.status_id = 3 AND board_id=".$id);
        return view('admin.commands.order')->with(compact('id','firsttry','suma'));
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
        $status_pending = Status::find(3);
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

            $commands = new Commands();
            $commands->quantity = $request->quantity;
            $commands->product_id = $request->product_id;
            $commands->board_id = $request->commandas;
            $commands->subtotal = ($request->quantity * $request->price);
            $commands->status_id = 3;
            $commands->save();

        }elseif ($board->status_id === 2 && $ticket[0]->status_id === 3){

            $commands = new Commands();
            $commands->quantity = $request->quantity;
            $commands->product_id = $request->product_id;
            $commands->board_id = $request->commandas;
            $commands->subtotal = ($request->quantity * $request->price);
            $commands->status_id = 3;
            $commands->save();
        }

//        $updating = DB::select('UPDATE commands SET status_id = 3 WHERE board_id = '.$request->commandas.' AND status_id is NULL ');

        return back();
    }

    public function dataproduct($id)
    {
        if (\request()->ajax()){
            $data = Product::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    public function pdf($id)
    {
        $firsttry = DB::select('
SELECT product_images.image, products.id, products.name,  products.price, commands.id, commands.quantity, commands.subtotal
FROM products, boards, commands, product_images
WHERE products.id = commands.product_id AND product_images.product_id = products.id AND commands.board_id = boards.id AND boards.id = '.$id.' and product_images.featured = 1 ;');
        $pdf = \PDF::loadView('generatedpdf.pdf', compact('firsttry'));
        return $pdf->stream('firstpdf.pdf');
    }
}
