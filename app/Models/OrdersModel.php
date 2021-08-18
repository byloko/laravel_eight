<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdersModel extends Model
{
    protected $table = 'orders';


     static public function getOrders($school_id) {
        return self::select('orders.*')
                        ->join('users','users.id','=','orders.user_id')
                        ->where('orders.user_id','=',$school_id)
                        ->orderBy('orders.id','desc')
                        ->paginate(10);
    }


    static public function getAllRecord($request){

        $return =  self::select('orders.*')
            ->orderBy('id','desc');

            $return = $return->paginate(10);
           //   $return = $return->where('user_id', '=', 6)->paginate(10);
              

        return $return;
    }

    static public function get_record()
    {
        // return self::get();
        $return = self::select('orders.*')
                ->orderBy('id', 'desc')
                ->paginate(20);

        return $return;
    }

    public function get_user_name(){
      return $this->belongsTo(User::class, "user_id");
   }


}