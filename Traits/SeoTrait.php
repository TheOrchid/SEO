<?php namespace Orchid\SEO\SeoTrait;

use Cache;

trait SeoTrait
{
    /**
     * @param array $data
     */
    public function generate(array $data = null)
    {
        if (is_null($data)) {
            /* Automatic Detection */


        } else {
            /* Without the use of database */
            $this->fill($data);

        }


    }


}
