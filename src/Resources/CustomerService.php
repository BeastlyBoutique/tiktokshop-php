<?php
/*
 * This file is part of tiktok-shop.
 *
 * (c) Jin <j@sax.vn>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EcomPHP\TiktokShop\Resources;

use GuzzleHttp\RequestOptions;
use EcomPHP\TiktokShop\Resource;

class CustomerService extends Resource
{
    protected $category = 'customer_service';

    public function createConversation($buyer_user_id)
    {
        return $this->call('POST', 'conversations', [
            RequestOptions::JSON => [
                'buyer_user_id' => $buyer_user_id
            ]
        ]);
    }
}
