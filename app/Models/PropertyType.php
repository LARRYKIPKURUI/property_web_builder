<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    protected $table = "property_types";

    // This method now correctly defines the one-to-many relationship
    public function properties() {
        return $this->hasMany(Property::class, "property_type_id", "id");
    }
}