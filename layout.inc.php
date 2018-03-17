<?php

// FIXME: make links on alert boxes white and add dashed underline to them
// TODO: figure a way to inject OpenSans font or fallback to sans serif

// NOTE: the query statistics chart needs to be altered differently than css

/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * configures general layout
 * for detailed layout configuration please refer to the css files
 *
 * @package    PhpMyAdmin-theme
 * @subpackage PMADarkTheme
 */

/**
 * navi frame
 */
// navi frame width
$GLOBALS['cfg']['NaviWidth']                = 240;

// foreground (text) color for the navi frame
$GLOBALS['cfg']['NaviColor']                = '#999';

// background for the navi frame
$GLOBALS['cfg']['NaviBackground']           = '#151515';

// foreground (text) color of the pointer in navi frame
$GLOBALS['cfg']['NaviPointerColor']         = '#fff';

// background of the pointer in navi frame
$GLOBALS['cfg']['NaviPointerBackground']    = 'rgba(255,255,255,0.05)';

// Background of header bar
$GLOBALS['cfg']['HeaderBackground']         = '#222';
$GLOBALS['cfg']['SuccessText']              = '#d4fb6a';
$GLOBALS['cfg']['ControlColor']             = '#d64937';
$GLOBALS['cfg']['PageBackground']           = '#1a1a1a';


/**
 * main frame
 */
// foreground (text) color for the main frame
$GLOBALS['cfg']['MainColor']                = '#111';

// background for the main frame
$GLOBALS['cfg']['MainBackground']           = '#222';

// foreground (text) color of the pointer in browse mode
$GLOBALS['cfg']['BrowsePointerColor']       = '#000';

// background of the pointer in browse mode
$GLOBALS['cfg']['BrowsePointerBackground']  = '#cfc';

// foreground (text) color of the marker (visually marks row by clicking on it)
// in browse mode
$GLOBALS['cfg']['BrowseMarkerColor']        = '#fff';

// background of the marker (visually marks row by clicking on it) in browse mode
$GLOBALS['cfg']['BrowseMarkerBackground']   = '#fc9';

/**
 * fonts
 */
/**
 * the font family as a valid css font family value,
 * if not set the browser default will be used
 * (depending on browser, DTD and system settings)
 */
$GLOBALS['cfg']['FontFamily']           = '"Open Sans", sans-serif';
/**
 * fixed width font family, used in textarea
 */
$GLOBALS['cfg']['FontFamilyFixed']      = 'consolas, monospace';

/**
 * tables
 */
// border
$GLOBALS['cfg']['Border']               = 0;
// table header and footer color
$GLOBALS['cfg']['ThBackground']         = '#222';
// table header and footer background
$GLOBALS['cfg']['ThColor']              = '#ccc';
// table data row background
$GLOBALS['cfg']['BgOne']                = 'rgba(0,0,0,0.2)';
// table data row background, alternate
$GLOBALS['cfg']['BgTwo']                = '#111';

/**
 * query window
 */
// Width of Query window
$GLOBALS['cfg']['QueryWindowWidth']     = 600;
// Height of Query window
$GLOBALS['cfg']['QueryWindowHeight']    = 400;

/**
 * Chart colors
 */

 $GLOBALS['cfg']['chartColor'] = array(
    'gradientIntensity'       => 50,
    // The style of the chart title.
    'titleColor'              => '#000',
    'titleBgColor'            => '#E5E5E5',
    // Chart border (0 for no border)
    'border'                  => '#ccc',
    // Chart background color.
    'bgColor'                 => '#FBFBFB',
    // when graph area gradient is used, this is the color of the graph
    // area border
    'graphAreaColor'          => '#D5D9DD',
    // the background color of the graph area
    'graphAreaGradientColor'  => $GLOBALS['cfg']['BgTwo'],
    // the color of the grid lines in the graph area
    'gridColor'               => '#E6E6E6',
    // the color of the scale and the labels
    'scaleColor'              => '#D5D9DD',

 );
