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
 * to servicedesk@totalinternetgroup.nl so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please contact servicedesk@totalinternetgroup.nl for more information.
 *
 * @copyright   Copyright (c) 2017 Total Internet Group B.V. (http://www.totalinternetgroup.nl)
 * @license     http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 */
class TIG_PostNL_Model_Core_System_Config_Source_AgeCheckProductOptions
    extends TIG_PostNL_Model_Core_System_Config_Source_ProductOptions_Abstract
{
    /**
     * @var array
     */
    protected $_options = array(
        array(
            'value'             => '3438',
            'label'             => 'Parcel with Agecheck 18+',
            'isExtraCover'      => false,
            'isAvond'           => true,
            'isSunday'          => true,
            'isCod'             => false,
            'isSameDay'         => true,
            'statedAddressOnly' => false,
            'countryLimitation' => 'NL',
        ),
        array(
            'value'             => '3443',
            'label'             => 'Parcel with Extra Cover + Agecheck 18+',
            'isExtraCover'      => true,
            'isAvond'           => true,
            'isSunday'          => true,
            'isCod'             => false,
            'isSameDay'         => true,
            'statedAddressOnly' => false,
            'countryLimitation' => 'NL',
        ),
        array(
            'value'             => '3446',
            'label'             => 'Parcel with Extra Cover + Agecheck 18+ Return when not home',
            'isExtraCover'      => true,
            'isAvond'           => true,
            'isSunday'          => true,
            'isCod'             => false,
            'isSameDay'         => true,
            'statedAddressOnly' => false,
            'countryLimitation' => 'NL',
        ),
        array(
            'value'             => '3449',
            'label'             => 'Parcel with Agecheck 18+ Return when not home',
            'isExtraCover'      => false,
            'isAvond'           => true,
            'isSunday'          => true,
            'isCod'             => false,
            'isSameDay'         => true,
            'statedAddressOnly' => false,
            'countryLimitation' => 'NL',
        ),
        array(
            'value'             => '3437',
            'label'             => 'Parcel with Agecheck 18+ Neighbors',
            'isExtraCover'      => false,
            'isAvond'           => true,
            'isSunday'          => true,
            'isCod'             => false,
            'isSameDay'         => true,
            'statedAddressOnly' => false,
            'countryLimitation' => 'NL',
        ),
    );

    /**
     * Get available id check options
     *
     * @param bool $flat
     *
     * @return array
     */
    public function getAvailableOptions($flat = false)
    {
        return $this->getOptions(array(), $flat, true);
    }
}
