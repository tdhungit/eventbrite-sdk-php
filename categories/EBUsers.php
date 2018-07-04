<?php
/**
 * Created by UP5 Tech & YouAddOn.
 * Website: https://up5.vn
 * User: Jacky
 * Email: hungtran@up5.vn | jacky@youaddon.com
 * Person: tdhungit@gmail.com
 * Skype: tdhungit
 * Git: https://github.com/tdhungit
 */

class EBUsers extends EventbriteBase
{
    /**
     * get profile current user
     * @return array|mixed
     */
    public function getProfile()
    {
        return $this->get('/users/me/');
    }
}