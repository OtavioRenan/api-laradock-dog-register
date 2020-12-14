<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Cachorro;

class CachorroResource extends JsonResource
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
            'nome' => $this->nome,
            'dono' => $this->dono,
            'tipo' => Cachorro::find($this->id)->raca,
            'nascimento' => $this->convertData($this->nascimento),
        ];
    }

    function convertData($data)
    {
        return date('d/m/Y', strtotime($data));
    }
}
