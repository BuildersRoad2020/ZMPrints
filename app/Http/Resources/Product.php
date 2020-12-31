<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Category as CategoryResource;
use App\Http\Resources\Image as ImageResource;

class Product extends JsonResource
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
            'name' => $this->name,
            'details' => $this->details,            
            'rate' => $this->rate,
            'quantity' => $this->quantity,
            'image_path' => $this->image_path,                 
            'category' => CategoryResource::collection($this->whenLoaded('category')),
            'image' => ImageResource::collection($this->whenLoaded('image')),   
            'image_count' => $this->when(!is_null($this->image_count), $this->image_count),                     
            'category_count' => $this->when(!is_null($this->category_count), $this->category_count),       
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    public function with($request)
    {
        return [
            'status' => 'OK'
        ];
    }
}
