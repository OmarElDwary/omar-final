<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashboarComponent extends Component
{
    public function render()
    {
        $orders= Order::orderBy('created_at', 'DESC')->get()->take(10);
        $totalSales = Order::where('status','delivered')->count();
        $totalRevenue = Order::where('status','delivered')->sum('total');
        $todaySales = Order::where('status','delivered')->whereData('created_at',Carbon::today())->count();
        $todayRevenue = Order::where('status','delivered')->whereData('created_at',Carbon::today())->sum('total');
        return view('livewire.admin.admin-dashboar-component',[
            'orders'=>$orders,
            'totalSales'=>$totalSales,
            'totalRevenue'=>$totalRevenue, 
            'todaySales'=> $todaySales,
            'todayRevenue'=>$todayRevenue
            ])->layout(layouts.base);
    }
}
