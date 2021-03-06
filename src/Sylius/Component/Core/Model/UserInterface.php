<?php

/*
* This file is part of the Sylius package.
*
* (c) Paweł Jędrzejewski
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Sylius\Component\Core\Model;

use Sylius\Component\Rbac\Model\IdentityInterface;
use Sylius\Component\User\Model\UserInterface as BaseUserInterface;

/**
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
interface UserInterface extends BaseUserInterface, IdentityInterface
{
}
