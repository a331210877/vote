<?php
namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;
use DB;

class Page extends Model
{
    public static function addPage($page)
    {
        $data['figure']=$page['image'];
        $data['open_id']=session('wechat.oauth_user.default.id');
        $data['start_time']=time();
        $data['end_time']=$page['endTime'];
        $data['title']=$page['title'];
        $data['main_content']="";
        $data['status']=0;
        $addRes=DB::table('page')->insert($data);
        return $addRes;
    }
}