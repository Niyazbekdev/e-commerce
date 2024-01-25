<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DeliveryMethod;
use App\Models\Order;
use Carbon\CarbonPeriod;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\LazyCollection;

class StatsController extends Controller
{
    public function orderCount(Request $request)
    {
        $to = Carbon::now();
        $from  = Carbon::now()->subMonth();

        if($request->has(['from', 'to'])){
            $from = $request->from;
            $to = $request->to;
        }

        return $this->response(
            Order::query()
                ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
                ->whereRelation('status', 'code', 'waiting_payment')
                ->count()
        );
    }

    public function orderSalesSum(Request $request)
    {
        $to = Carbon::now();
        $from  = Carbon::now()->subMonth();

        if($request->has(['from', 'to'])){
            $from = $request->from;
            $to = $request->to;
        }

        return $this->response(
            Order::query()
                ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
                ->whereRelation('status', 'code', 'waiting_payment')
                ->sum('sum')
        );
    }

    public function deliveryMethodRatio(Request $request)
    {
//        if (Cache::has('deliveryMethodRatio')){
//            return Cache::get('deliveryMethodRatio');
//        }

        $to = Carbon::now();
        $from  = Carbon::now()->subMonth();

        if($request->has(['from', 'to'])){
            $from = $request->from;
            $to = $request->to;
        }

        $response = [];

        $allOrder = Order::query()
            ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
            ->whereRelation('status', 'code', 'waiting_payment')
            ->count();

        foreach (DeliveryMethod::all() as $deliveryMethod){
            $deliveryMethodAllOrders = $deliveryMethod->orders()
                ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
                ->whereRelation('status', 'code', 'waiting_payment')
                ->count();

            $response[] = [
                'name' => $deliveryMethod->getTranslations('name'),
                'percentage' => round($deliveryMethodAllOrders * 100 / $allOrder),
                'amount' => $deliveryMethodAllOrders
            ];
        }

//        Cache::put('deliveryMethodRatio', $response, Carbon::now()->addDay());

        return $this->response($response);
    }

    public function orderCountByDays(Request $request)
    {
        $to = Carbon::now();
        $from  = Carbon::now()->subMonth();

        if($request->has(['from', 'to'])){
            $from = $request->from;
            $to = $request->to;
        }

        $days = CarbonPeriod::create($from, $to);
        $response =  new Collection();

        LazyCollection::make($days->toArray())->each(function ($day) use ($from, $to, $response){
            $count = Order::query()
                ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
                ->whereRelation('status', 'code', 'waiting_payment')
                ->count();

            $response [] = [
                'date' => $day->format('Y-m-d'),
                'orders_count' => $count
            ];
        });

        return $this->response($response);
    }
}
