<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UserResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $response = [
            'id'        => (int) $this->id,
            'first_name'    => $this->first_name,
            'middle_name'   => $this->middle_name,
            'last_name'     => $this->last_name,
            'email'         => $this->user->email,
            'tenant_id'     => $this->tenant_id,
            'is_active'     => $this->is_active == 1,
            'is_super_user' => $this->is_super_user == 1,
            'tenant_name'   => $this->tenant == null ? null : $this->tenant->name,
        ];

        return $response;
    }
}
