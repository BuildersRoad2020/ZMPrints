<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use App\Models\Image;
use App\Http\Resources\Image as ImageResource;

class ImagesController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {
      //  $this->authorize('create', [Image::class, $request->product_id]);
      //  $image = Image::create($request->all());
      //  return new ImageResource( $image);
      $image = new Image; 
      $name = $request->file('image');
      $filename = 'product_id_' . $request->product_id . '_' . time() . '.' . $name->getClientOriginalExtension();
      $name->storeAs('/public', $filename);
      $image->product_id = $request->product_id;
      $image->image = $filename;
      $image->save();
  
      return new ImageResource( $image);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $this->authorize('delete', $image);
        $image->delete();
        return ['status' => 'OK'];
    }
}
