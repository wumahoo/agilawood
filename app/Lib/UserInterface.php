<?php
/**
 * @author: wumahoo
 * @date: 11:35 PM 2018/7/11
 */

namespace App\Lib;

use Swoft\Core\ResultInterface;

/**
 * Interface UserInterface
 *
 * @method ResultInterface deferGetUser(array $id)
 */
interface UserInterface
{
    public function getUser(array $id);
}