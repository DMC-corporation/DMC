<?php

namespace DMC\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DMCUserBundle extends Bundle
{
public function getParent()
    {
        return 'FOSUserBundle';
    }
}
