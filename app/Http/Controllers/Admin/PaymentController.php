<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commands;
use App\Models\payment;
use App\Models\Status;
use App\Models\Ticket;
use App\Models\Tills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function payboard($id, Request $request)
    {
        $command_to_payed = DB::table('commands')
            ->where('status_id','=','3')
            ->update(['status_id' => 4]);

        $board_to_free = DB::table('boards')
            ->where('status_id','=','2')
            ->update(['status_id' => 1]);

        $ticket_to_payed = DB::table('tickets')
            ->where('status_id','=','3')
            ->where('board_id','=',$request->lamesa)
            ->update(['status_id' => 4,
                'total' => $request->total]);

//        $update_command_to_pay = DB::select('UPDATE commands SET status_id = 4 WHERE board_id = 1 AND status_id = 3');
//        $update_board_to_free = DB::select('UPDATE boards SET status_id = 1 WHERE status_id = 2');
//        $update_ticket_to_payed = DB::select('UPDATE tickets SET status_id = 4, total = '.$request->total.' WHERE board_id = '.$request->lamesa.' AND status_id = 3 AND total = 0.00');
        $recent_ticket = Ticket::latest('status_id')->first();
        $total_cash = Tills::all();
        if($recent_ticket === 4){
            $updateCash = $total_cash[1]-$request->total;

            $ticket = Ticket::create([
                'total' => $updateCash,
                'user_id' => auth()->id(),
            ]);
        }
        return redirect('/admin/payment/pdf/'.$id);
    }

    public function index($id)
    {
        $firsttry = DB::select('
SELECT product_images.image, products.id, products.name,  products.price, commands.id, commands.quantity, commands.subtotal
FROM products, boards, commands, product_images
WHERE products.id = commands.product_id AND product_images.product_id = products.id AND commands.board_id = boards.id AND boards.id = '.$id.' and product_images.featured = 1 ;');
        $pdf = \PDF::loadView('generatedpdf.pdf', compact('firsttry'));
        return $pdf->stream('firstpdf.pdf');
    }
}
