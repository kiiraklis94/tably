<?php
/**
 * Created by PhpStorm.
 * User: kiiraklis94
 * Date: 15/12/2016
 * Time: 00:24
 */

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class CrmController extends Controller
{

    public function getAllCustomers(){

        $userID = Auth::user()->id;

        $customers = Customer::where('u_id', $userID)->get()->toJson();

        return response()->json($customers, 200);

    }


}