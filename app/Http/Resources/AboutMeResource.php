<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class AboutMeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request)
    {
        $protocol = preg_match("/^HTTPS/",$_SERVER['SERVER_PROTOCOL']) ? 'https://' : 'http://';

        $serverAdress = $protocol . $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'];
        return [
            'id' => $this->id,
            'title' => $this->title,
            'imgSrc' => $serverAdress . '/storage/about_me/'. $this->img,
            'text' => $this->text
        ];
    }
}
