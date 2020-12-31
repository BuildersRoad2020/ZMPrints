<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Image extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'image' => $this->image,
            'product_id' => $this->product_id,
            'image_path' => $this->image_path,            
         ];
    }
    public function with($request)
    {
        return [
            'status' => 'OK'
        ];
    }   
}
