<?php
$defaults = my_get_default_mods();

/**
 * Colors options
 *
 * @copyright 2019-present Creative Themes
 * @license   http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @package   Blocksy
 */

$options = [ 'colors_section_options' => [
	'type' => 'ct-options',
	'setting' => [ 'transport' => 'postMessage' ],
	'inner-options' => [

		'colorPalette' => [
			'label' => __( 'Color Palettes', 'blocksy' ),
			'desc' => my_css_desc([
				'--main',
				'--mainDark',
				'--mainLight',
				'--sub',
				'--subLight'
			]),
			'type'  => 'ct-color-palettes-picker',
			'design' => 'block',
			'setting' => [ 'transport' => 'postMessage' ],
			'predefined' => true,

			'value' => wp_parse_args( $defaults['colorPalette'], [
				'current_palette' => 'palette-1',
				'palettes' => [ [
					'id' => 'palette-1',
					'color1' => [ 'color' => '#1976d2' ],
					'color2' => [	'color' => '#0d47a1' ],
					'color3' => [	'color' => '#bbdefb' ],
					'color4' => [	'color' => '#2c3e50' ],
					'color5' => [	'color' => '#ffffff' ]
				] ]
			] ),
		],

		blocksy_rand_md5() => [
			'type' => 'ct-title',
			'label' => __( 'Global Colors', 'blocksy' ),
		],

		// 'extraEditorColors' => [
		// 	'label' => __( 'Extra Editor Colors', 'blocksy' ),
		// 	'desc' => 'Available colors in Gutenberg editor (in addition from Palette)' .
		// 	my_css_desc( [],
		// 		'<code>--c6</code> to <code>--c10</code>'
		// 	),
		// 	'type'  => 'ct-color-picker',
		// 	'skipEditPalette' => true,
		// 	'design' => 'inline',
		// 	'setting' => [ 'transport' => 'postMessage' ],
		// 	'value' => $defaults['extraEditorColors'],
		// 	'pickers' => [
		// 		[
		// 			'title' => __( 'Blue', 'blocksy' ),
		// 			'id' => 'blue',
		// 		],
		// 		[
		// 			'title' => __( 'Blue Light', 'blocksy' ),
		// 			'id' => 'blue-light',
		// 		],
		// 		[
		// 			'title' => __( 'Red', 'blocksy' ),
		// 			'id' => 'red',
		// 		],
		// 		[
		// 			'title' => __( 'Red Light', 'blocksy' ),
		// 			'id' => 'red-light',
		// 		],
		// 		[
		// 			'title' => __( 'Green', 'blocksy' ),
		// 			'id' => 'green',
		// 		],
		// 	],
		// ],

		'fontColor' => [
			'label' => __( 'Font Color', 'blocksy' ),
			'desc' => my_css_desc( [
				'--color',
				'--colorHover'
			] ),
			'type'  => 'ct-color-picker',
			'skipEditPalette' => true,
			'design' => 'inline',
			'setting' => [ 'transport' => 'postMessage' ],
			'value' => $defaults['fontColor'],

			'pickers' => [
				[
					'title' => __( 'Initial', 'blocksy' ),
					'id' => 'default',
				],
				[
					'title' => __( 'Hover', 'blocksy' ),
					'id' => 'hover',
				],
			],
		],

		'headingColor' => [
			'label' => __( 'Heading Color', 'blocksy' ),
			'desc' => my_css_desc( [
				'--headingColor',
			] ),
			'type'  => 'ct-color-picker',
			'skipEditPalette' => true,
			'design' => 'inline',
			'setting' => [ 'transport' => 'postMessage' ],
			'value' => $defaults['headingColor'],
			'pickers' => [
				[
					'title' => __( 'Initial', 'blocksy' ),
					'id' => 'default',
				],
			],
		],

		blocksy_rand_md5() => [
			'label' => __( 'Button', 'blocksy' ),
			'type' => 'ct-title',
		],

		'buttonTextColor' => [
			'label' => __( 'Button Text Color', 'blocksy' ),
			'desc' => my_css_desc( [
				'--buttonTextInitialColor',
				'--buttonTextHoverColor'
			] ),
			'type'  => 'ct-color-picker',
			'design' => 'inline',
			'skipEditPalette' => true,
			'setting' => [ 'transport' => 'postMessage' ],
			'value' => $defaults['buttonTextColor'],
			'pickers' => [
				[
					'title' => __( 'Initial', 'blocksy' ),
					'id' => 'default',
				],

				[
					'title' => __( 'Hover', 'blocksy' ),
					'id' => 'hover',
				],
			],
		],

		'buttonColor' => [
			'label' => __( 'Button Color', 'blocksy' ),
			'desc' => my_css_desc( [
				'--buttonInitialColor',
				'--buttonHoverColor'
			] ),
			'type'  => 'ct-color-picker',
			'design' => 'inline',
			'skipEditPalette' => true,
			'setting' => [ 'transport' => 'postMessage' ],
			'value' => $defaults['buttonColor'],
			'pickers' => [
				[
					'title' => __( 'Initial', 'blocksy' ),
					'id' => 'default',
				],

				[
					'title' => __( 'Hover', 'blocksy' ),
					'id' => 'hover',
				],
			],
		],


		blocksy_rand_md5() => [
			'type' => 'ct-title',
			'label' => __( 'Content Links', 'blocksy' ),
			'desc' => __( 'These options will affect only the links that are inside the posts & pages content area.', 'blocksy' ),
		],

		'content_link_type' => [
			'label' => __( 'Content Link Type', 'blocksy' ),
			'type' => 'ct-select',
			'value' => $defaults['content_link_type'],
			'view' => 'text',
			'design' => 'inline',
			'setting' => [ 'transport' => 'postMessage' ],
			'choices' => blocksy_ordered_keys(
				[
					'type-1' => __( '1 - Normal', 'blocksy' ),
					'type-2' => __( '2 - Underline', 'blocksy' ),
					'type-3' => __( '3 - Underline on Hover', 'blocksy' ),
					'type-4' => __( '4 - Background on Hover', 'blocksy' ),
					// 'type-5' => __( '5 - Type 4 but from Left', 'blocksy' ),
				]
			),
		],

		'contentLinksColor' => [
			'label' => __( 'Content Links Color', 'blocksy' ),
			'desc' => my_css_desc( [
				'--entryLinkColor',
				'--entryLinkColorHover',
				'--entryLinkTextColor'
			], '3rd Var only appears on Type 4' ),
			'type'  => 'ct-color-picker',
			'skipEditPalette' => true,
			'design' => 'inline',
			'setting' => [ 'transport' => 'postMessage' ],
			'value' => $defaults['contentLinksColor'],
			'pickers' => [
				[
					'title' => __( 'Initial', 'blocksy' ),
					'id' => 'default',
				],

				[
					'title' => __( 'Hover', 'blocksy' ),
					'id' => 'hover',
				],

				[
					'title' => __( 'Text Alt', 'blocksy' ),
					'id' => 'text',
					'condition' => [ 'content_link_type' => 'type-4|type-5' ]
				],
			],
		],


	],
], ];
