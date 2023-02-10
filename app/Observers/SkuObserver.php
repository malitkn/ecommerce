<?php

namespace App\Observers;

use App\Models\Sku;

class SkuObserver
{
    /**
     * Handle the Sku "created" event.
     *
     * @param  \App\Models\Sku  $sku
     * @return void
     */
    public function created(Sku $sku)
    {
        $sku->sku = "SKU-P-" . $sku->product_id . "-" . rand(1,999);
        $sku->save();
    }

    /**
     * Handle the Sku "updated" event.
     *
     * @param  \App\Models\Sku  $sku
     * @return void
     */
    public function updated(Sku $sku)
    {
        //
    }

    /**
     * Handle the Sku "deleted" event.
     *
     * @param  \App\Models\Sku  $sku
     * @return void
     */
    public function deleted(Sku $sku)
    {
        //
    }

    /**
     * Handle the Sku "restored" event.
     *
     * @param  \App\Models\Sku  $sku
     * @return void
     */
    public function restored(Sku $sku)
    {
        //
    }

    /**
     * Handle the Sku "force deleted" event.
     *
     * @param  \App\Models\Sku  $sku
     * @return void
     */
    public function forceDeleted(Sku $sku)
    {
        //
    }
}
