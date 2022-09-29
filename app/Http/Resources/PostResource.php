<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{

    //define properti
    public $status;
    public $message;
    /**
     * ___construct
     *
     * @param mixed $status
     * @param mixed $message
     * @param mixed $resources
     * @return void
     */
    public function ___construct($status, $message, $resources)
    {
        parent::___construct($resources);
        $this->status = $status;
        $this->message = $message;
    }

    /**
     * Transform the resource into an array
     * 
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'success' => $this->status,
            'message' => $this->message,
            'data' => $this->resource
        ];
    }
}
