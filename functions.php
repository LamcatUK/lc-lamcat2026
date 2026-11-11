<?php
/**
 * Lamcat 2026 — theme functions.
 *
 * Standalone theme, no parent theme. See style.css header for the
 * "BS-flavored naming, not Bootstrap" note and browser support baseline.
 *
 * @package lc-lamcat2026
 */

defined( 'ABSPATH' ) || exit;

define( 'LC_LAMCAT2026_DIR', get_template_directory() );

require_once LC_LAMCAT2026_DIR . '/inc/setup.php';
require_once LC_LAMCAT2026_DIR . '/inc/enqueue.php';
require_once LC_LAMCAT2026_DIR . '/inc/class-lamcat-2026-nav-walker.php';
require_once LC_LAMCAT2026_DIR . '/inc/blocks.php';
require_once LC_LAMCAT2026_DIR . '/inc/editor.php';
require_once LC_LAMCAT2026_DIR . '/inc/options.php';
require_once LC_LAMCAT2026_DIR . '/inc/icon-upload.php';
require_once LC_LAMCAT2026_DIR . '/inc/social-icons.php';
require_once LC_LAMCAT2026_DIR . '/inc/head-tags.php';
require_once LC_LAMCAT2026_DIR . '/inc/block-usage.php';
require_once LC_LAMCAT2026_DIR . '/inc/utilities.php';
require_once LC_LAMCAT2026_DIR . '/inc/posttypes.php';
require_once LC_LAMCAT2026_DIR . '/inc/taxonomies.php';
