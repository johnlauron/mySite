<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Skill extends Model
{
    protected $fillable = [
        'skill_name',
        'file_location'
    ];

    protected $table = 'skills';

    public function moveFile($path, $file_name) {
        return $file_name->move($path, $file_name->getClientOriginalName());
    }
    public function storeData(array $data) {

        DB::beginTransaction();
            try{
                //move file
                $this->moveFile('images/', $data['file']);

                Skill::create([
                    'skill_name' => $data['skill_name'],
                    'file_location' => 'images/'.$data['file']->getClientOriginalName()
                ]);
            }
            catch(Exception $e) {
                DB::rollback();
                throw $e;
            }
        DB::commit();   
        
    }
    public function fetchAll() {
        // return Skill::latest()->limit(8)->get();
        return Skill::IdDescending()->limit(8)->get();
    }
    public function scopeIdDescending($query) {
        return $query->orderBy('id','DESC');
    }
}
