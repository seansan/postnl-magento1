<?php
/**
 *                  ___________       __            __
 *                  \__    ___/____ _/  |_ _____   |  |
 *                    |    |  /  _ \\   __\\__  \  |  |
 *                    |    | |  |_| ||  |   / __ \_|  |__
 *                    |____|  \____/ |__|  (____  /|____/
 *                                              \/
 *          ___          __                                   __
 *         |   |  ____ _/  |_   ____ _______   ____    ____ _/  |_
 *         |   | /    \\   __\_/ __ \\_  __ \ /    \ _/ __ \\   __\
 *         |   ||   |  \|  |  \  ___/ |  | \/|   |  \\  ___/ |  |
 *         |___||___|  /|__|   \_____>|__|   |___|  / \_____>|__|
 *                  \/                           \/
 *                  ________
 *                 /  _____/_______   ____   __ __ ______
 *                /   \  ___\_  __ \ /  _ \ |  |  \\____ \
 *                \    \_\  \|  | \/|  |_| ||  |  /|  |_| |
 *                 \______  /|__|    \____/ |____/ |   __/
 *                        \/                       |__|
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Creative Commons License.
 * It is available through the world-wide-web at this URL:
 * http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to servicedesk@tig.nl so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please contact servicedesk@tig.nl for more information.
 *
 * @copyright   Copyright (c) 2015 Total Internet Group B.V. (http://www.tig.nl)
 * @license     http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 */
class TIG_PostNL_Model_Core_Api_V2 extends TIG_PostNL_Model_Core_Api
{
    public function createShipments($orderIds = array())
    {
        $resultArray = array();

//        $serviceModel = Mage::getModel('postnl_core/service_shipment');
//        foreach ($orderIds as $orderId) {
//            $serviceModel->resetWarnings();
//            $shipmentId = $serviceModel->createShipment($orderId);
//
//            $resultArray[] = array(
//                'order_id'    => $orderId,
//                'shipment_id' => $shipmentId,
//                'warning'     => $serviceModel->getWarnings()
//            );
//        }

        return array(
            array(
                'order_id' => 1,
                'shipment_id' => 2,
                'warning' => array(
                    array(
                        'entity_id' => 1,
                        'code' => 'test',
                        'description' => 'test',
                    ),
                    array(
                        'entity_id' => 2,
                        'code' => 'test2',
                        'description' => 'test2',
                    ),
                ),
            ),
        );

//        $return = array(
//            array(
//                'order_id' => 1,
//                'shipment_id' => 2,
//            ),
//            array(
//                'order_id' => 2,
//                'shipment_id' => 3,
//                'warning' => 'test warning',
//            ),
//        );

        return $resultArray;
    }

    public function fullPostnlFlow($orderIds = array())
    {
        return array('test2');
    }

    public function confirmShipments($shipmentsIds = array())
    {
        return array('test3');
    }

    public function printShippingLabels($shipmentsIds = array())
    {
        return array('test4');
    }

    public function confirmAndPrintShippingLabels($shipmentIds = array())
    {
        return array('test5');
    }

    public function getTrackAndTraceUrls($shipmentIds = array())
    {
        return array('test6');
    }

    public function getStatusInfo($shipmentIds = array())
    {
        return array('test7');
    }
}