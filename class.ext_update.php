<?php

/**
 * Class ext_update
 *
 * Performs update tasks migrating *bootstrap-EXT to fluidbootstraptheme

 *
 *
 */
class ext_update {
    /**
     * @return boolean
     */
    public function access() {
        return TRUE;
    }
    /**
     * @return string
     */
    public function main() {

        //select all Contentelements from Fluidcontent_bootstrap and migrate them - new version

        $res = $GLOBALS['TYPO3_DB']->exec_SELECTquery('*', 'tt_content', '(`tx_fed_fcefile` LIKE "FluidTYPO3.Fluidcontentbootstrap:%" OR `tx_fed_fcefile` LIKE "fluidcontent_bootstrap:%" OR `tx_fed_fcefile` LIKE "fluidcontent_twitterbootstrap:%" OR `tx_fed_fcefile` LIKE "fluidbootstraptheme:%")', 'tx_fed_fcefile', '', '');

        while ($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
            $replaced = str_replace(array('FluidTYPO3.FluidcontentBootstrap','fluidcontent_bootstrap','fluidcontent_twitterbootstrap','fluidbootstraptheme'), 'FluidBT.Fluidbootstraptheme', $row['tx_fed_fcefile']);

            $GLOBALS['TYPO3_DB']->exec_UPDATEquery('tt_content', 'tx_fed_fcefile = "'.$row['tx_fed_fcefile'].'"', array('tx_fed_fcefile' => $replaced));
            $updated.= $GLOBALS['TYPO3_DB']->sql_affected_rows() . ' rows have been updated for '.$row['tx_fed_fcefile'].'';
            $updated.= '<br />';
        }

        //select all Pagetemplates from Fluidpages_bootstrap and migrate them

        $respages = $GLOBALS['TYPO3_DB']->exec_SELECTquery('*', 'pages', '`tx_fed_page_controller_action` LIKE "fluidpages_bootstrap%"', 'tx_fed_page_controller_action', '', '');

        while ($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($respages)) {
            $replacedpages = str_replace('fluidpages_bootstrap', 'fluidbootstraptheme', $row['tx_fed_page_controller_action']);

            $GLOBALS['TYPO3_DB']->exec_UPDATEquery('pages', 'tx_fed_page_controller_action = "'.$row['tx_fed_page_controller_action'].'"', array('tx_fed_page_controller_action' => $replacedpages));
            $updated.= $GLOBALS['TYPO3_DB']->sql_affected_rows() . ' rows have been updated for '.$row['tx_fed_page_controller_action'].'';
            $updated.= '<br />';
        }

        //fix all templates for Subpages

        $ressubpages = $GLOBALS['TYPO3_DB']->exec_SELECTquery('*', 'pages', '`tx_fed_page_controller_action_sub` LIKE "fluidpages_bootstrap%"', 'tx_fed_page_controller_action_sub', '', '');

        while ($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($ressubpages)) {
            $replacedsubpages = str_replace('fluidpages_bootstrap', 'fluidbootstraptheme', $row['tx_fed_page_controller_action_sub']);

            $GLOBALS['TYPO3_DB']->exec_UPDATEquery('pages', 'tx_fed_page_controller_action_sub = "'.$row['tx_fed_page_controller_action_sub'].'"', array('tx_fed_page_controller_action_sub' => $replacedsubpages));
            $updated.= $GLOBALS['TYPO3_DB']->sql_affected_rows() . ' rows have been updated for '.$row['tx_fed_page_controller_action_sub'].'';
            $updated.= '<br />';

        }

        return $updated;
    }
}

