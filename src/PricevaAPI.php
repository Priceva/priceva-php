<?php
/**
 * Created by PhpStorm.
 * S.Belichenko, email: stanislav@priceva.com
 * Date: 01.10.2018
 * Time: 16:52
 */

namespace Priceva;


/**
 * Class PricevaAPI
 *
 * @package Priceva
 */
class PricevaAPI
{
    const ACTION_MAIN_PING = 'main/ping';
    const ACTION_MAIN_DEMO = 'main/demo';

    const ACTION_PRODUCT_LIST = 'product/list';

    /**
     * @var string $api_key
     * @var int    $api_version
     * @var string $request_method
     */
    private $api_key        = '';
    private $api_version    = '';
    private $request_method = '';

    /**
     * PricevaAPI constructor.
     *
     * @param        $api_key
     * @param string $api_version
     * @param string $request_method
     */
    public function __construct( $api_key, $api_version = '1', $request_method = Request::METHOD_POST )
    {
        $this->api_key        = $api_key;
        $this->api_version    = $api_version;
        $this->request_method = $request_method;
    }

    /**
     * @return Result;
     * @throws PricevaException
     */
    public function main_ping()
    {
        $request = new Request([
            'api_key'     => $this->api_key,
            'api_version' => $this->api_version,
            'action'      => self::ACTION_MAIN_PING,
        ]);

        return $request->start();
    }

    /**
     * @return Result;
     * @throws PricevaException
     */
    public function main_demo()
    {
        $request = new Request([
            'api_key'     => $this->api_key,
            'api_version' => $this->api_version,
            'action'      => self::ACTION_MAIN_DEMO,
        ]);

        return $request->start();
    }

    /**
     * @return Result;
     * @throws PricevaException
     */
    public function product_list()
    {
        $request = new Request([
            'api_key'     => $this->api_key,
            'api_version' => $this->api_version,
            'action'      => self::ACTION_PRODUCT_LIST,
        ]);

        return $request->start();
    }
}
