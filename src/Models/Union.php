<?php

namespace Sandofvega\Bdgeocode\Models;

use Illuminate\Database\Eloquent\Model;

class Union extends Model
{
    public function thana()
    {
        return $this->belongsTo(Thana::class);
    }

    public function district()
    {
        return $this->thana->belongsTo(District::class);
    }

    public function division()
    {
        return $this->district->belongsTo(Division::class);
    }
}