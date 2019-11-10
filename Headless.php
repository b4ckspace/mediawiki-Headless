<?php

 
$wgExtensionMessagesFiles['HeadlessMagic'] = dirname(__FILE__) . '/Headless.i18n.magic.php';
$wgHooks['ParserBeforeTidy'][] = 'Headless::removeTitle';


MagicWord::$mDoubleUnderscoreIDs[] = 'notitle';


class Headless {
    public static function removeTitle( &$parser, &$text ) {
        if (isset( $parser->mDoubleUnderscores['notitle'])) {
            $parser->mOutput->addHeadItem(
                '<style type="text/css">'
                . 'h1.firstHeading {display: none;}'
                . '</style>'
            );
	 }
         return true;
    }
}
