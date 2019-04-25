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
            $img_name = $data['file'];
            $file_location = 'images/';
            $this->moveFile($file_location, $img_name);

            Skill::create([
                'skill_name' => $data['skill_name'],
                'file_location' => $file_location.''.$img_name->getClientOriginalName()
            ]);
        }
        catch(Exception $e) {
            DB::rollback();
            throw $e;
        }
        DB::commit();   
    }
    public function fetchAll() {
        return Skill::orderBy('created_at', 'desc')->limit(8)->get();
    }
}
