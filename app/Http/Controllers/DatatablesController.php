<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;
use App\User;
use App\Product;

class DatatablesController extends Controller
{
    //

    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('datatables.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function anyData()
    {
//        $users = DB::table('users')
//            ->join('products', 'users.id', '=', 'products.user_id')
//            ->select('users.*', 'products.nome_product')
//            ->get;

        return Datatables::of(User::query()->join('products', 'users.id', '=', 'products.user_id')
            ->select('users.*', 'products.nome_product')->get())->make(true);
    }
}
