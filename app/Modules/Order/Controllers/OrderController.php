<?php
namespace App\Modules\Order\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Modules\Users\Repositories\OrderRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{



    public function create(){
        return view('order::create');
    }



}
