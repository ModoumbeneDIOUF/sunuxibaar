<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\ImageResource;
use App\Http\Resources\TagResource;
use App\Http\Resources\CommentResource;
use App\Http\Support\Carbon;


class PostResource extends JsonResource
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
            'post_id' => $this->id,
            'post_title' => $this->title,
            'post_type' => $this->post_type,
            // 'author_id' => $this->author_id,
            // 'category_id' => $this->category_id,
            'post_meta' => $this->meta_data,
            'update_at' =>Carbon::parse( $this->update_at)->formate('d/m/Y'),
            'category' => new CategoryResource($this->category),
            'author' => new userResource ($this->author),
            'images' => ImageResource::collection($this->images),
            'tags' => new TagResource($this->tags),
            'comments' => CommentResource::collection($this->comments),
        ];
    }
}
