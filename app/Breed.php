<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function subBreeds() {
        return $this->hasMany(App\Models\SubBreed::class);
    }


    public function fetch($url)
    {
        $client = new Client();

        $response = $client->request('GET', $url);
        $breeds = json_decode($response->getBody());

        $dog_breeds = $breeds->message;

        foreach($dog_breeds as $x => $val){
            $breed = Breed::find($x);
            
            if(!$breed){
                Breed::create(['name'=>$x]);
            }else{
                $breed->fill($request->all());
            }
        }
        
        return $breeds;
    }
}
