<?php
/**
 * This file is part of the FIREGENTO project.
 *
 * FireGento_MageSetup is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License version 3 as
 * published by the Free Software Foundation.
 *
 * This script is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * PHP version 5
 *
 * @category  FireGento
 * @package   FireGento_MageSetup
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2013 FireGento Team (http://www.firegento.de). All rights served.
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @version   $Id:$
 * @since     0.2.0
 */
/**
 * Setup class for Tax Settings
 *
 * @category  FireGento
 * @package   FireGento_MageSetup
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2013 FireGento Team (http://www.firegento.de). All rights served.
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @version   $Id:$
 * @since     0.5.0
 */
class FireGento_MageSetup_Model_Setup_Systemconfig extends FireGento_MageSetup_Model_Setup_Abstract
{
    /**
     * Setup Tax setting
     */
    public function setup()
    {
        $this->_updateConfigData();
    }

    /**
     * Update configuration settings
     */
    protected function _updateConfigData()
    {
        $setup = $this->_getSetup();
        foreach ($this->_getConfigSystemConfig() as $key => $value) {
            $setup->setConfigData(str_replace('__', '/', $key), $value);
        }
    }

    /**
     * Get tax calculations from config file
     *
     * @return array Config System Config
     */
    protected function _getConfigSystemConfig()
    {
        return $this->_getConfigNode('system_config', 'default');
    }
}
