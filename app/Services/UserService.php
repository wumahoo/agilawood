<?php
/**
 * @author: wumahoo
 * @date: 11:38 PM 2018/7/11
 */

namespace App\Services;


use App\Lib\UserInterface;
use Swoft\Core\ResultInterface;
use Swoft\Rpc\Server\Bean\Annotation\Service;

/**
 * Class UserService
 *
 * @package App\Services
 *
 * @method ResultInterface deferGetUser(array $id)
 * @Service()
 */
class UserService implements UserInterface
{
    public function getUser(array $id)
    {
        return [
            'one', 'two'
        ];
    }
}