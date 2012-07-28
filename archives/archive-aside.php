<?php
/**
 * Post-Format: Aside Archive Loop
 * This shows post-format: aside archive loop.
 *
 * @package     OpusPrimus
 * @since       0.1
 *
 * @author      Opus Primus <in.opus.primus@gmail.com>
 * @copyright   Copyright (c) 2012, Opus Primus
 *
 * @link        http://codex.wordpress.org/Template_Hierarchy - URI reference
 *
 * This file is part of Opus Primus.
 *
 * Opus Primus is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.
 *
 * You may NOT assume that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to:
 *
 *      Free Software Foundation, Inc.
 *      51 Franklin St, Fifth Floor
 *      Boston, MA  02110-1301  USA
 *
 * The license for this software can also likely be found here:
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

/** Get the Post Structure and Navigation class variables */
global $opus_structure, $opus_nav; ?>

<div <?php post_class(); ?>>

    <?php
    $opus_structure->post_byline( array(
        'tempus'        => 'time',
        'anchor'        => 'Said',
        'sticky_flag'   => 'Noteworthy'
    ) );
    $opus_structure->post_title();
    $opus_structure->comments_link();
    $opus_structure->post_excerpt();
    $opus_nav->opus_link_pages( array(), $preface = __( 'Pages:', 'opusprimus' ) );
    $opus_structure->meta_tags();
    $opus_structure->post_coda(); ?>

</div><!-- .post -->
