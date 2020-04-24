<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Book extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'        => $this->id,
            'title'     => $this->title,
            'author'    => $this->author,
            'genre'     => $this->genre,
            'year'      => $this->year,
            'summary'   => substr($this->summary, 0, 200).'...',
            'created'   => $this->created_at->diffForHumans(),
            'created_at'=> $this->created_at->format('d-m-Y'),
            'updated_at'=> $this->updated_at->format('d-m-Y')
        ];
    }
}
