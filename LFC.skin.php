<?php
/**
* Skin file for skin LFC.
*
* @file
* @ingroup Skins
*/

wfLoadSkin('Vector');

/**
 * SkinTemplate class for LFC skin
 * @ingroup Skins
 */
class SkinLFC extends SkinVector {

    var $skinname = 'LFC', $stylename = 'LFC', $template = 'LFCTemplate';

    /**
     * @param $out OutputPage object
     */
    function setupSkinUserCss( OutputPage $out ) {
        parent::setupSkinUserCss( $out );
        $out->addStyle("https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swaphttps://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Source+Sans+Pro&display=swap");
        $out->addModuleStyles( "skins.lfc" );
    }

    /**
     * This function adds JavaScript via ResourceLoader and
     * a meta tag.
     *
     * @param OutputPage $out
     */

    public function initPage( OutputPage $out ) {
        parent::initPage( $out );
        $out->addMeta( 'viewport', 'width=device-width, initial-scale=1.0' );
        $out->addModules( 'skins.lfc.js' );
    }
}
