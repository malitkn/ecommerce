<?php

namespace App\Observers;

use App\Models\Attribute;
use Illuminate\Support\Str;

class AttributeObserver
{
    /**
     * Handle the Attribute "creating" event.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return void
     */
    public function creating(Attribute $attribute): void
    {
        $attribute->code = strtoupper(Str::slug($attribute->name));
    }

   /**
     * Handle the Attribute "created" event.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return void
     */
    public function updating(Attribute $attribute): void
    {
        $attribute->code = strtoupper(Str::slug($attribute->name));
    }


}
