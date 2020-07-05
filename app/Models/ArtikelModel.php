<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel {
    public static function get_all(){
        $items = DB::table('artikel')->get();
        return $items;
    }

    public static function save($data){
        $new_item = DB::table('artikel')->insert($data);
        return $new_item;
    }

    public static function find_by_id($id){
        $item = DB::table('artikel')->where('id', $id)->first();
        return $item;
    }

    public static function update($data){
        $update = DB::table('artikel')->where('id', $data['id'])->update($data);
         return $update;
    }

    public static function delete($id){
        $item = DB::table('artikel')->where('id', $id)->delete();
         return 'deleted';
    }
}