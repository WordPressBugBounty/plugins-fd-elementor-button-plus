<?php

namespace Elementor;

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

class Widget_FD_Elementor_Button_plus extends Widget_Base {

    public function get_name() {   //Function for get the slug of the element name.
        return 'fd_advanced_button';
    }

    public function get_title() {   //Function for get the name of the element.
        return __('Elementor Button Plus', 'fd-elementor-button-plus');
    }

    public function get_icon() {   //Function for get the icon of the element.
       // return 'fab fa-btc';
		//return 'fa-brands fa-btc';
	//	return 'fab fa-bitcoin';
		return ' eicon-dual-button';
		
    }

    public function get_categories() {   //Function for include element into the category.
        return ['adv-btn'];
    }

    public static function get_button1_sizes() {  //define sizes of button1.
        return [
            'xs' => __('Extra Small', 'fd-elementor-button-plus'),
            'sm' => __('Small', 'fd-elementor-button-plus'),
            'md' => __('Medium', 'fd-elementor-button-plus'),
            'lg' => __('Large', 'fd-elementor-button-plus'),
            'xl' => __('Extra Large', 'fd-elementor-button-plus'),
        ];
    }

    public static function get_button2_sizes() {  //define sizes of button2.
        return [
            'xs' => __('Extra Small', 'fd-elementor-button-plus'),
            'sm' => __('Small', 'fd-elementor-button-plus'),
            'md' => __('Medium', 'fd-elementor-button-plus'),
            'lg' => __('Large', 'fd-elementor-button-plus'),
            'xl' => __('Extra Large', 'fd-elementor-button-plus'),
        ];
    }

    protected function register_controls() {   //Function register controls for the element.
        $this->start_controls_section(//Add controls to for Select options.
            'section_fd_adv_opt', 
			[
               'label' => __('Button Types', 'fd-elementor-button-plus'),
            ]
        );

        $this->add_control(
            'fd_adv_btn_option', 
		    [
				'label' => __('Button Type', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'adv_btn' => __('Single Button', 'fd-elementor-button-plus'),
					'dual_button' => __('Dual Button', 'fd-elementor-button-plus'),
					'dbwt' => __('Dual Button With Text', 'fd-elementor-button-plus'),
				],
				'default' => 'adv_btn',
            ]
        );

        $this->add_control(//Add Layout Style control for button1.
            'fd_adv_btn1_layout', 
			[
				'label' => __('Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'normal',
				'options' => [
					'normal' => __('Normal', 'fd-elementor-button-plus'),
					'push' => __('Push Button', 'fd-elementor-button-plus'),
					'circle' => __('Circle Button', 'fd-elementor-button-plus'),
					'slide' => __('Slide Button', 'fd-elementor-button-plus'),
					'swipe' => __('Swipe Button', 'fd-elementor-button-plus'),
					'sketch' => __('Sketch Border Buttons', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option' => 'adv_btn',
				],
            ]
        );

        $this->add_control(//Add Layout Style control for button1.
            'fd_dual_btn1_layout', [
				'label' => __('Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'normal',
				'options' => [
					'normal' => __('Normal', 'fd-elementor-button-plus'),
					'push' => __('Push Button', 'fd-elementor-button-plus'),
					'slide' => __('Slide Button', 'fd-elementor-button-plus'),
					'swipe' => __('Swipe Button', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
				],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(//Add controls to for button1.
            'section_fd_adv_btn1', [
                'label' => __('Button', 'fd-elementor-button-plus'),
            ]
        );

        $this->add_control(//Add hover style control for normal Style layout.
            'fd_adv_btn1_style_normal',
			[
				'label' => __('Hover Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => __('Style1', 'fd-elementor-button-plus'),
					'style2' => __('Style2', 'fd-elementor-button-plus'),
					'style3' => __('Style3', 'fd-elementor-button-plus'),
					'style4' => __('Style4', 'fd-elementor-button-plus'),
					'style5' => __('Style5', 'fd-elementor-button-plus'),
					'style6' => __('Style6', 'fd-elementor-button-plus'),
					'style7' => __('Style7', 'fd-elementor-button-plus'),
					'style8' => __('Style8', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option' => 'adv_btn',
					'fd_adv_btn1_layout' => 'normal',
				],
            ]
        );

        $this->add_control(//Add hover style control for normal Style layout.
            'fd_dual_btn1_style_normal',
			[
				'label' => __('Hover Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => __('Style1', 'fd-elementor-button-plus'),
					'style2' => __('Style2', 'fd-elementor-button-plus'),
					'style3' => __('Style3', 'fd-elementor-button-plus'),
					'style4' => __('Style4', 'fd-elementor-button-plus'),
					'style5' => __('Style5', 'fd-elementor-button-plus'),
					'style6' => __('Style6', 'fd-elementor-button-plus'),
					'style7' => __('Style7', 'fd-elementor-button-plus'),
					'style8' => __('Style8', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
					'fd_dual_btn1_layout' => 'normal',
				],
            ]
        );

        $this->add_control(//Add hover style control for push Style layout.
            'fd_adv_btn1_style_push', 
			[
				'label' => __('Hover Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => __('Style1', 'fd-elementor-button-plus'),
					'style2' => __('Style2', 'fd-elementor-button-plus'),
					'style3' => __('Style3', 'fd-elementor-button-plus'),
					'style4' => __('Style4', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option' => 'adv_btn',
					'fd_adv_btn1_layout' => 'push',
				],
            ]
        );
        $this->add_control(//Add hover style control for push Style layout.
            'fd_dual_btn1_style_push', 
			[
				'label' => __('Hover Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => __('Style1', 'fd-elementor-button-plus'),
					'style2' => __('Style2', 'fd-elementor-button-plus'),
					'style3' => __('Style3', 'fd-elementor-button-plus'),
					'style4' => __('Style4', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
					'fd_dual_btn1_layout' => 'push',
				],
            ]
        );

        $this->add_control(//Add hover style control for flat Style layout.
            'fd_adv_btn1_style_circle', 
			[
				'label' => __('Hover Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => __('Style1', 'fd-elementor-button-plus'),
					'style2' => __('Style2', 'fd-elementor-button-plus'),
					'style3' => __('Style3', 'fd-elementor-button-plus'),
					'style4' => __('Style4', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option' => 'adv_btn',
					'fd_adv_btn1_layout' => 'circle',
				],
            ]
        );

        $this->add_control(//Add hover style control for outline Style layout.
            'fd_adv_btn1_style_slide',
			[
				'label' => __('Hover Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => __('Style1', 'fd-elementor-button-plus'),
					'style2' => __('Style2', 'fd-elementor-button-plus'),
					'style3' => __('Style3', 'fd-elementor-button-plus'),
					'style4' => __('Style4', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option' => 'adv_btn',
					'fd_adv_btn1_layout' => 'slide',
				],
            ]
        );
        $this->add_control(//Add hover style control for push Style layout.
            'fd_dual_btn1_style_slide',
			[
				'label' => __('Hover Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => __('Style1', 'fd-elementor-button-plus'),
					'style2' => __('Style2', 'fd-elementor-button-plus'),
					'style3' => __('Style3', 'fd-elementor-button-plus'),
					'style4' => __('Style4', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
					'fd_dual_btn1_layout' => 'slide',
				],
            ]
        );

        $this->add_control(//Add hover style control for 3D Style layout.
            'fd_adv_btn1_style_swipe',
			[
				'label' => __('Hover Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => __('Style1', 'fd-elementor-button-plus'),
					'style2' => __('Style2', 'fd-elementor-button-plus'),
					'style3' => __('Style3', 'fd-elementor-button-plus'),
					'style4' => __('Style4', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option' => 'adv_btn',
					'fd_adv_btn1_layout' => 'swipe',
				],
            ]
        );

        $this->add_control(//Add hover style control for push Style layout.
            'fd_dual_btn1_style_swipe', 
			[
				'label' => __('Hover Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => __('Style1', 'fd-elementor-button-plus'),
					'style2' => __('Style2', 'fd-elementor-button-plus'),
					'style3' => __('Style3', 'fd-elementor-button-plus'),
					'style4' => __('Style4', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
					'fd_dual_btn1_layout' => 'swipe',
				],
            ]
        );

        $this->add_control(//Add control to edit title for button1.
            'fd_adv_btn1_text', 
			[
				'label' => __('Text', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::TEXT,
				'default' => __('Button1 Text', 'fd-elementor-button-plus'),
				'placeholder' => __('Button1 Text', 'fd-elementor-button-plus'),
            ]
        );

        $this->add_control(//Add control to set link for button1.
            'fd_adv_btn1_link',
			[
				'label' => __('Link', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::URL,
				'placeholder' => 'http://your-link.com',
				'default' => [
					'url' => '#',
				],
            ]
        );
		
		$this->add_control(			//Add select control for Button1 Link Rel Type.
			'fd_adv_btn1_link_type',
			[
				'label' => __( 'Link Type', 'fd-elementor-button-plus' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'dofollow',
				'options' => [
					'dofollow' => __( 'DoFollow', 'fd-elementor-button-plus' ),
					'nofollow' => __( 'NoFollow', 'fd-elementor-button-plus' ),
				],
			]
		);

        $this->add_responsive_control(//Add select control for button alignment.
            'fd_adv_btn1_align',
			[
				'label' => __('Alignment', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __('Left', 'fd-elementor-button-plus'),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __('Center', 'fd-elementor-button-plus'),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __('Right', 'fd-elementor-button-plus'),
						'icon' => 'fa fa-align-right',
					],
					'justify' => [
						'title' => __('Justified', 'fd-elementor-button-plus'),
						'icon' => 'fa fa-align-justify',
					],
				],
				'prefix_class' => 'elementor%s-align-',
				'default' => '',
            ]
        );

        $this->add_control(//Add control to select button1 size from different sizes.
            'fd_adv_btn1_size', 
			[
				'label' => __('Size', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'sm',
				'options' => self::get_button1_sizes(),
            ]
        );

        $this->add_control(//Add control to select an icon for button1.
            'fd_adv_btn1_icon',
			[
				'label' => __('Icon', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::ICONS,
				'fa4compatibility' => 'icon',
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'fa-solid',
				],
            ]
        );

        $this->add_control(//Add control for button1 icon position.
            'fd_adv_btn1_icon_align', 
			[
				'label' => __('Icon Position', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left' => __('Before', 'fd-elementor-button-plus'),
					'right' => __('After', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn1_icon!' => '',
				],
            ]
        );

        $this->add_control(//Add control for button1 icon spacing.
            'fd_adv_btn1_icon_indent',
			[
				'label' => __('Icon Spacing', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 50,
					],
				],
				'condition' => [
					'fd_adv_btn1_icon!' => '',
					'fd_adv_btn_option' => 'adv_btn',
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-button .elementor-align-icon-right' => 'margin-left: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .elementor-button .elementor-align-icon-left' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
            ]
        );
        $this->add_control(//Add control for button1 icon spacing.
            'fd_dual_btn1_icon_indent',
			[
				'label' => __('Icon Spacing', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 50,
					],
				],
				'condition' => [
					'fd_adv_btn1_icon!' => '',
					'fd_adv_btn_option!' => 'adv_btn',
				],
				'selectors' => [
					'{{WRAPPER}} .dual-button-left .elementor-align-icon-right, .dbwt-button-left .elementor-align-icon-right' => 'margin-left: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .dual-button-left .elementor-align-icon-left, .dbwt-button-left .elementor-align-icon-left' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
            ]
        );

        $this->add_control(//Add control for add tooltips option for button1.
            'fd_adv_btn1_tooltip',
			[
				'label' => __('Tooltip', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'no',
				'options' => [
					'yes' => __('Yes', 'fd-elementor-button-plus'),
					'no' => __('No', 'fd-elementor-button-plus'),
				],
            ]
        );

        $this->add_control(//Add control for add tooltips text on button1.
            'fd_btn1_tooltip_text', 
			[
				'label' => __('Text', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::TEXT,
				'default' => __('Tooltip Text', 'fd-elementor-button-plus'),
				'placeholder' => __('Tooltip Text', 'fd-elementor-button-plus'),
				'condition' => [
					'fd_adv_btn1_tooltip' => 'yes',
				],
            ]
        );

        $this->add_control(//Add control for add tooltips position for button1.
            'fd_btn1_tooltip_position',
			[
				'label' => __('Position', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'top',
				'options' => [
					'top' => __('Top', 'fd-elementor-button-plus'),
					'top_left' => __('Top Left', 'fd-elementor-button-plus'),
					'top_right' => __('Top right', 'fd-elementor-button-plus'),
					'bottom' => __('Bottom', 'fd-elementor-button-plus'),
					'bottom_left' => __('Bottom Left', 'fd-elementor-button-plus'),
					'bottom_right' => __('Bottom Right', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn1_tooltip' => 'yes',
				],
            ]
        );

        $this->end_controls_section();   //End cotrol section for button1.

        $this->start_controls_section( //Start section for Text or Icon section for button1 with text option.
            'section_fd_btn1_text',
			[
				'label' => __('Text or Icon', 'fd-elementor-button-plus'),
				'condition' => [
					'fd_adv_btn_option' => 'dbwt',
				],
            ]
        );

        $this->add_control(//add controls for Text or Icon option for button1.
            'fd_dbwt_btn_option', 
			[
				'label' => __('Select Option', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => __('Text', 'fd-elementor-button-plus'),
					'icon' => __('Icon', 'fd-elementor-button-plus'),
				],
            ]
        );

        $this->add_control(//add controls for Title editor of button1.
            'fd_dbwt_btn_text',
			[
				'label' => __('Text', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::TEXT,
				'default' => __('Or', 'fd-elementor-button-plus'),
				'placeholder' => __('Or', 'fd-elementor-button-plus'),
				'condition' => [
					'fd_dbwt_btn_option' => '',
				],
            ]
        );

        $this->add_control(//Add control Icon section for button2 for text or icon section.
            'fd_dbwt_icon',
			[
				'label' => __('Icon', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::ICONS,
				'fa4compatibility' => 'icon',
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'fa-solid',
				],
				'condition' => [
					'fd_dbwt_btn_option' => 'icon',
				],
            ]
			
        );

        $this->end_controls_section();   //End control section for Text or icon for button1.

        $this->start_controls_section(//Start control section with name button2.
            'section_fd_adv_btn2',
			[
				'label' => __('Button 2', 'fd-elementor-button-plus'),
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
				],
            ]
        );

        $this->add_control(//Add hover style control for normal Style layout.
            'fd_dual_btn2_style_normal',
			[
				'label' => __('Hover Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => __('Style1', 'fd-elementor-button-plus'),
					'style2' => __('Style2', 'fd-elementor-button-plus'),
					'style3' => __('Style3', 'fd-elementor-button-plus'),
					'style4' => __('Style4', 'fd-elementor-button-plus'),
					'style5' => __('Style5', 'fd-elementor-button-plus'),
					'style6' => __('Style6', 'fd-elementor-button-plus'),
					'style7' => __('Style7', 'fd-elementor-button-plus'),
					'style8' => __('Style8', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
					'fd_dual_btn1_layout' => 'normal',
				],
            ]
        );

        $this->add_control(//Add hover style control for push Style layout.
            'fd_dual_btn2_style_push',
			[
				'label' => __('Hover Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => __('Style1', 'fd-elementor-button-plus'),
					'style2' => __('Style2', 'fd-elementor-button-plus'),
					'style3' => __('Style3', 'fd-elementor-button-plus'),
					'style4' => __('Style4', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
					'fd_dual_btn1_layout' => 'push',
				],
            ]
        );

        $this->add_control(//Add hover style control for push Style layout.
            'fd_dual_btn2_style_slide', 
			[
				'label' => __('Hover Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => __('Style1', 'fd-elementor-button-plus'),
					'style2' => __('Style2', 'fd-elementor-button-plus'),
					'style3' => __('Style3', 'fd-elementor-button-plus'),
					'style4' => __('Style4', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
					'fd_dual_btn1_layout' => 'slide',
				],
            ]
        );

        $this->add_control(//Add hover style control for push Style layout.
            'fd_dual_btn2_style_swipe', 
			[
				'label' => __('Hover Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => __('Style1', 'fd-elementor-button-plus'),
					'style2' => __('Style2', 'fd-elementor-button-plus'),
					'style3' => __('Style3', 'fd-elementor-button-plus'),
					'style4' => __('Style4', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
					'fd_dual_btn1_layout' => 'swipe',
				],
            ]
        );

        $this->add_control(//Add control to edit title for button2.
            'fd_adv_btn2_text', 
			[
				'label' => __('Text', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::TEXT,
				'default' => __('Button2 Text', 'fd-elementor-button-plus'),
				'placeholder' => __('Button2 Text', 'fd-elementor-button-plus'),
            ]
        );

        $this->add_control(//Add control to set link for button2.
            'fd_adv_btn2_link',
			[
				'label' => __('Link', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::URL,
				'placeholder' => 'http://your-link.com',
				'default' => [
					'url' => '#',
				],
            ]
        );
        
		$this->add_control(			//Add select control for Button2 Link Rel Type.
			'fd_adv_btn2_link_type',
			[
				'label' => __( 'Link Type', 'fd-elementor-button-plus' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'dofollow',
				'options' => [
					'dofollow' => __( 'DoFollow', 'fd-elementor-button-plus' ),
					'nofollow' => __( 'NoFollow', 'fd-elementor-button-plus' ),
				],
			]
		);

        $this->add_control(//Add control to select an icon for button2.
            'fd_adv_btn2_icon', 			
			[
				'label' => __('Icon', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::ICONS,
				'fa4compatibility' => 'icon',
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'fa-solid',
				],				
            ]
			
        );

        $this->add_control(//Add control for button2 icon position.
            'fd_adv_btn2_icon_align',
			[
				'label' => __('Icon Position', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left' => __('Before', 'fd-elementor-button-plus'),
					'right' => __('After', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn2_icon!' => '',
				],
            ]
        );

        $this->add_control(//Add control for button1 icon spacing.
            'fd_adv_btn2_icon_indent',
			[
				'label' => __('Icon Spacing', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 50,
					],
				],
				'condition' => [
					'fd_adv_btn2_icon!' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .dual-button-right .elementor-align-icon-right, .dbwt-button-right .elementor-align-icon-right' => 'margin-left: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .dual-button-right .elementor-align-icon-left, .dbwt-button-right .elementor-align-icon-left' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
            ]
        );

        $this->add_control(//Add control for add tips when hover on button.
            'fd_adv_btn2_tooltip', 
			[
				'label' => __('Tooltip', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'no',
				'options' => [
					'yes' => __('Yes', 'fd-elementor-button-plus'),
					'no' => __('No', 'fd-elementor-button-plus'),
				],
            ]
        );

        $this->add_control(//Add control for add tooltips text for button2.
            'fd_btn2_tooltip_text', 
			[
				'label' => __('Text', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::TEXT,
				'default' => __('Tooltip Text', 'fd-elementor-button-plus'),
				'placeholder' => __('Tooltip Text', 'fd-elementor-button-plus'),
				'condition' => [
					'fd_adv_btn2_tooltip' => 'yes',
				],
            ]
        );

        $this->add_control(//Add control for add tooltips position for button2.
            'fd_btn2_tooltip_position',
			[
				'label' => __('Position', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'top',
				'options' => [
					'top' => __('Top', 'fd-elementor-button-plus'),
					'top_left' => __('Top Left', 'fd-elementor-button-plus'),
					'top_right' => __('Top right', 'fd-elementor-button-plus'),
					'bottom' => __('Bottom', 'fd-elementor-button-plus'),
					'bottom_left' => __('Bottom Left', 'fd-elementor-button-plus'),
					'bottom_right' => __('Bottom Right', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn2_tooltip' => 'yes',
				],
            ]
        );
        $this->end_controls_section();   //End Style control section for button2.

        $this->start_controls_section(//Strats Style section control for button1.
            'fd_adv_btn1_section_style',
			[
				'label' => __('Button', 'fd-elementor-button-plus'),
				'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(//Add style control to set border width for Single button.
            Group_Control_Border::get_type(),
			[
				'name' => 'fd_adv_btn1',
				'label' => __('Border', 'fd-elementor-button-plus'),
				'placeholder' => '1px',
				'default' => '1px',
				'selector' => '{{WRAPPER}} .elementor-button',
				'condition' => [
					'fd_adv_btn_option' => 'adv_btn',
				],
            ]
        );

        $this->add_group_control(//Add style control to set border width for dual button.
            Group_Control_Border::get_type(),
			[
				'name' => 'fd_dual_btn1',
				'label' => __('Border', 'fd-elementor-button-plus'),
				'placeholder' => '1px',
				'default' => '1px',
				'selector' => '{{WRAPPER}} .dual-button-left',
				'condition' => [
					'fd_adv_btn_option' => 'dual_button',
				],
            ]
        );
        $this->add_group_control(//Add style control to set border width for dbwt button.
            Group_Control_Border::get_type(),
			[
				'name' => 'fd_dbwt_btn1',
				'label' => __('Border', 'fd-elementor-button-plus'),
				'placeholder' => '1px',
				'default' => '1px',
				'selector' => '{{WRAPPER}} .dbwt-button-left',
				'condition' => [
					'fd_adv_btn_option' => 'dbwt',
				],
            ]
        );

        $this->add_control(//Add style control for border radius of button1.
            'fd_adv_btn1_border_radius', 
			[
				'label' => __('Border Radius', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors' => [
					'{{WRAPPER}} .elementor-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .dual-button-left' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .dbwt-button-left' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'fd_adv_btn1_layout!' => 'sketch',
				],
            ]
        );

        $this->add_control(//Add style control to set padding between text and button1.
            'fd_adv_btn1_text_padding', 
			[
				'label' => __('Text Padding', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'default' => [
					'top' => '15',
					'right' => '10',
					'bottom' => '15',
					'left' => '10',
					'unit' => 'px',
					'isLinked' => 'false',
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .dual-button-left' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .dbwt-button-left' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
            ]
        );

        $this->add_control(//Add style control to set margin between buttons.
            'fd_adv_btn1_margin', 
			[
				'label' => __('Margin', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .dual-button-left' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .dbwt-button-left' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
				],
            ]
        );
        $this->start_controls_tabs('button1_tabs');

        $this->start_controls_tab('fd_btn1_normal', ['label' => __('Normal', 'fd-elementor-button-plus')]);
        $this->add_control(//Add style control to select text single button.
            'fd_adv_btn1_text_color', 
			[
				'label' => __('Text Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-button' => 'color: {{VALUE}};',
				],
				'condition' => [
					'fd_adv_btn_option' => 'adv_btn',
				],
            ]
        );

        $this->add_control(//Add style control to select text color for dual & dbwt button.
            'fd_dual_btn1_text_color',
			[
				'label' => __('Text Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dual-button-left' => 'color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-left' => 'color: {{VALUE}};',
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
				],
            ]
        );

        $this->add_group_control(//Add group control to perform typography for single button.
            Group_Control_Typography::get_type(),
			[
				'name' => 'fd_adv_btn1_typography',
				'label' => __('Typography', 'fd-elementor-button-plus'),
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_ACCENT,
				],
				'selector' => '{{WRAPPER}} .elementor-button',
				'condition' => [
					'fd_adv_btn_option' => 'adv_btn',
					'fd_adv_btn1_layout!' => 'circle',
				],
            ]
        );
        $this->add_group_control(//Add group control to perform typography for dual button.
            Group_Control_Typography::get_type(),
			[
				'name' => 'fd_dual_btn1_typography',
				'label' => __('Typography', 'fd-elementor-button-plus'),
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_ACCENT,
				],
				'selector' => '{{WRAPPER}} .dual-button-left',
				'condition' => [
					'fd_adv_btn_option' => 'dual_button',
				],
            ]
        );
        $this->add_group_control(//Add group control to perform typography for dbwt button.
            Group_Control_Typography::get_type(),
			[
				'name' => 'fd_dbwt_btn1_typography',
				'label' => __('Typography', 'fd-elementor-button-plus'),
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_ACCENT,
				],
				'selector' => '{{WRAPPER}} .dbwt-button-left',
				'condition' => [
					'fd_adv_btn_option' => 'dbwt',
				],
            ]
        );

        $this->add_control(//Add style control to select color for single button.
            'fd_adv_btn1_background_color',
			[
				'label' => __('Background Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_ACCENT,
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-button' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'fd_adv_btn_option' => 'adv_btn',
				],
            ]
        );
        $this->add_control(//Add style control to select color for dual & dbwt button.
            'fd_dual_btn1_background_color', 
			[
				'label' => __('Background Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_ACCENT,
				],
				'selectors' => [
					'{{WRAPPER}} .dual-button-left' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-left' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
				],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab('fd_btn1_hover', ['label' => __('Hover', 'fd-elementor-button-plus')]);
        $this->add_control(//Add control to set text color of single button when hover on it.
            'fd_adv_btn1_hover_color', 
			[
				'label' => __('Text Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-button:hover' => 'color: {{VALUE}};',
				],
				'condition' => [
					'fd_adv_btn_option' => 'adv_btn',
				],
            ]
        );
        $this->add_control(//Add control to set text color of dual & dbwt button when hover on it.
            'fd_dual_btn1_hover_color',
			[
				'label' => __('Text Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dual-button-left:hover' => 'color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-left:hover' => 'color: {{VALUE}};',
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
				],
            ]
        );

        $this->add_control(//Add control for background color of single button hover.
            'fd_single_btn_background_hover_color', 
			[
				'label' => __('Background Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-button:hover' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'fd_adv_btn_option' => 'adv_btn',
					'fd_adv_btn1_layout!' => 'normal',
				],
            ]
        );
        $this->add_control(//Add control for background color of single button hover.
            'fd_adv_btn1_background_hover_color',
			[
				'label' => __('Background Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-button-normal.style1:hover .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .single-button-normal.style2:hover .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .single-button-normal.style3:hover .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .single-button-normal.style4:hover .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .single-button-normal.style5:hover .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .single-button-normal.style6:hover .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .single-button-normal.style7:hover .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .single-button-normal.style8:hover .btn-hover' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'fd_adv_btn_option' => 'adv_btn',
					'fd_adv_btn1_layout' => 'normal',
				],
            ]
        );

        $this->add_control(//Add control for background color of dual button hover.
            'fd_dual_btn_background_hover_color',
			[
				'label' => __('Background Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dual-button-left:hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-left:hover' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
					'fd_dual_btn1_layout!' => 'normal',
				],
            ]
        );

        $this->add_control(//Add control for background color of dbwt button hover.
            'fd_dual_btn1_background_hover_color',
			[
				'label' => __('Background Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dual-button-normal.style1 .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dual-button-normal.style2 .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dual-button-normal.style3 .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dual-button-normal.style4 .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dual-button-normal.style5 .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dual-button-normal.style6 .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dual-button-normal.style7 .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dual-button-normal.style8 .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-normal.style1 .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-normal.style2 .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-normal.style3 .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-normal.style4 .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-normal.style5 .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-normal.style6 .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-normal.style7 .btn-hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-normal.style8 .btn-hover' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
					'fd_dual_btn1_layout' => 'normal',
				],
            ]
        );

        $this->add_control(//Add control to set hover border color of button1.
            'fd_adv_btn1_hover_border_color',
			[
				'label' => __('Border Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'fd_adv_btn1_border!' => '',
					'fd_adv_btn_option' => 'adv_btn',
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-button:hover' => 'border-color: {{VALUE}};',
				],
            ]
        );
        $this->add_control(//Add control to set hover border color of button1.
            'fd_dual_btn1_hover_border_color',
			[
				'label' => __('Border Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'fd_dual_btn1_border!' => '',
					'fd_adv_btn_option' => 'dual_button',
				],
				'selectors' => [
					'{{WRAPPER}} .dual-button-left:hover' => 'border-color: {{VALUE}};',
				],
            ]
        );
        $this->add_control(//Add control to set hover border color of button1.
            'fd_dbwt_btn1_hover_border_color',
			[
				'label' => __('Border Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'fd_dbwt_btn1_border!' => '',
					'fd_adv_btn_option' => 'dbwt',
				],
				'selectors' => [
					'{{WRAPPER}} .dbwt-button-left:hover' => 'border-color: {{VALUE}};',
				],
            ]
        );

        $this->add_control(//To perforn the animation effect for button1.
            'fd_adv_btn1_hover_animation', 
			[
				'label' => __('Animation', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::HOVER_ANIMATION,
            ]
        );
        $this->end_controls_tabs();
        $this->end_controls_section();   //End button1 hover style section.

        $this->start_controls_section(//Strats Style section control for dual button with text for button1.
            'section_fd_dbwt_style',
			[
				'label' => __('Text or Icon', 'fd-elementor-button-plus'),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'fd_adv_btn_option' => 'dbwt',
				],
            ]
        );

        $this->add_control(//Add control to select text color for dual button with text for button1.
            'fd_dbwt_text_color',
			[
				'label' => __('Text Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dbwt-button-text' => 'color: {{VALUE}};',
				],
				'condition' => [
					'fd_adv_btn_option' => 'dbwt',
					'fd_dbwt_btn_option' => '',
				],
            ]
        );

        $this->add_control(//Add control to Font style for Text or Icon in dbwt button.
            'fd_dbwt_text_style', 
			[
				'label' => __('Font Style', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::SELECT,
				'default' => 'normal',
				'options' => [
					'normal' => __('Default', 'fd-elementor-button-plus'),
					//'bold' => __( 'Bold', 'fd-elementor-button-plus' ),
					'italic' => __('Italic', 'fd-elementor-button-plus'),
					'bold_italic' => __('Bold & Italic', 'fd-elementor-button-plus'),
					'underline' => __('Underline', 'fd-elementor-button-plus'),
					'bold_underline' => __('Bold & Underline', 'fd-elementor-button-plus'),
					'overline' => __('Overline', 'fd-elementor-button-plus'),
					'bold_overline' => __('Bold & Overline', 'fd-elementor-button-plus'),
					'oblique' => __('Oblique', 'fd-elementor-button-plus'),
				],
				'condition' => [
					'fd_adv_btn_option' => 'dbwt',
					'fd_dbwt_btn_option' => '',
				],
            ]
        );

        $this->add_control(//Add style control to select background color for dual button with text for button1.
            'fd_dbwt_background_color',
			[
				'label' => __('Background Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_ACCENT,
				],
				'selectors' => [
					'{{WRAPPER}} .dbwt-button-text' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'fd_adv_btn_option' => 'dbwt',
					'fd_dbwt_btn_option' => '',
				],
            ]
        );

        $this->add_group_control(//Add style control to set border width for button1.
            Group_Control_Border::get_type(),
			[
				'name' => 'fd_dbwt_btn_border',
				'label' => __('Border', 'fd-elementor-button-plus'),
				'placeholder' => '1px',
				'default' => '1px',
				'selector' => '{{WRAPPER}} .dbwt-button-text',
				'condition' => [
					'fd_adv_btn_option' => 'dbwt',
					'fd_dbwt_btn_option' => '',
				],
            ]
        );

        $this->add_control(//Add style control for border radius of button1.
            'fd_dbwt_text_border_radius',
			[
				'label' => __('Border Radius', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors' => [
					'{{WRAPPER}} .dbwt-button-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'fd_adv_btn_option' => 'dbwt',
					'fd_dbwt_btn_option' => '',
				],
            ]
        );

        $this->add_control(//Add control to select icon color for dual button with text for button1.
            'fd_dbwt_icon_color',
			[
				'label' => __('Icon Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dbwt-btn-icon' => 'color: {{VALUE}};',
				],
				'condition' => [
					'fd_adv_btn_option' => 'dbwt',
					'fd_dbwt_btn_option' => 'icon',
				],
            ]
        );

        $this->add_control(//Add style control to select icon background color for dual button with text for button1.
            'fd_dbwt_icon_background_color',
			[
				'label' => __('Icon Background Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_ACCENT,
				],
				'selectors' => [
					'{{WRAPPER}} .dbwt-btn-icon' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'fd_adv_btn_option' => 'dbwt',
					'fd_dbwt_btn_option' => 'icon',
				],
            ]
        );

        $this->add_group_control(//Add style control to set border width for button1.
            Group_Control_Border::get_type(),
			[
				'name' => 'fd_dbwt_icon_border',
				'label' => __('Border', 'fd-elementor-button-plus'),
				'placeholder' => '1px',
				'default' => '1px',
				'selector' => '{{WRAPPER}} .dbwt-btn-icon',
				'condition' => [
					'fd_adv_btn_option' => 'dbwt',
					'fd_dbwt_btn_option' => 'icon',
				],
            ]
        );
        $this->add_control(//Add style control for border radius of button1.
            'fd_dbwt_icon_border_radius', 
			[
				'label' => __('Border Radius', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors' => [
					'{{WRAPPER}} .dbwt-btn-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'fd_adv_btn_option' => 'dbwt',
					'fd_dbwt_btn_option' => 'icon',
				],
            ]
        );
        $this->end_controls_section();   //End Style section for dual button with text for button1

        $this->start_controls_section(//Strats Style section control for button2.
            'fd_adv_btn2_section_style',
			[
				'label' => __('Button 2', 'fd-elementor-button-plus'),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
				],
            ]
        );

        $this->add_group_control(//Add style control to set border for button2.
            Group_Control_Border::get_type(), 
			[
				'name' => 'fd_adv_btn2',
				'label' => __('Border', 'fd-elementor-button-plus'),
				'placeholder' => '1px',
				'default' => '1px',
				'selector' => '{{WRAPPER}} .dual-button-right',
				'condition' => [
					'fd_adv_btn_option' => 'dual_button',
				],
            ]
        );
        $this->add_group_control(//Add style control to set border for button2.
            Group_Control_Border::get_type(),
			[
				'name' => 'fd_dbwt_btn2',
				'label' => __('Border', 'fd-elementor-button-plus'),
				'placeholder' => '1px',
				'default' => '1px',
				'selector' => '{{WRAPPER}} .dbwt-button-right',
				'condition' => [
					'fd_adv_btn_option' => 'dbwt',
				],
            ]
        );

        $this->add_control(//Add style control for border radius of button2.
            'fd_adv_btn2_border_radius', 
			[
				'label' => __('Border Radius', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors' => [
					'{{WRAPPER}} .dual-button-right' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .dbwt-button-right' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
            ]
        );

        $this->add_control(//Add style control to set padding between icon and text for button1.
            'fd_adv_btn2_text_padding',
			[
				'label' => __('Text Padding', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'default' => [
					'top' => '15',
					'right' => '10',
					'bottom' => '15',
					'left' => '10',
					'unit' => 'px',
					'isLinked' => 'false',
				],
				'selectors' => [
					'{{WRAPPER}} .dual-button-right' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .dbwt-button-right' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
            ]
        );

        $this->add_control(//Add style control to set margin between buttons.
            'fd_adv_btn2_margin',
			[
				'label' => __('Margin', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .dual-button-right' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					'{{WRAPPER}} .dbwt-button-right' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'fd_adv_btn_option!' => 'adv_btn',
				],
            ]
        );

        $this->start_controls_tabs('button2_tabs');
        $this->start_controls_tab('fd_btn2_normal', ['label' => __('Normal', 'fd-elementor-button-plus')]);

        $this->add_control(//Add control to select text color of button2.
            'fd_adv_btn2_text_color', 
			[
				'label' => __('Text Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .dual-button-right' => 'color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-right' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_group_control(//Add group control to perform typography for button2.
            Group_Control_Typography::get_type(),
			[
				'name' => 'fd_adv_btn2_typography',
				'label' => __('Typography', 'fd-elementor-button-plus'),
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_ACCENT,
				],
				'selector' => '{{WRAPPER}} .dual-button-right', '{{WRAPPER}} .dbwt-button-right',
				'condition' => [
					'fd_adv_btn_option' => 'dual_button',
				],
            ]
        );
        $this->add_group_control(//Add group control to perform typography for button2.
            Group_Control_Typography::get_type(), 
			[
				'name' => 'fd_dual_btn2_typography',
				'label' => __('Typography', 'fd-elementor-button-plus'),
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_ACCENT,
				],
				'selector' => '{{WRAPPER}} .dbwt-button-right',
				'condition' => [
					'fd_adv_btn_option' => 'dbwt',
				],
            ]
        );

        $this->add_control(//Add style control to select background-color for button2.
            'fd_adv_btn2_background_color',
			[
				'label' => __('Background Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_ACCENT,
				],
				'selectors' => [
					'{{WRAPPER}} .dual-button-right' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-right' => 'background-color: {{VALUE}};',
				],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab('fd_btn2_hover', ['label' => __('Hover', 'fd-elementor-button-plus')]);
        $this->add_control(//Add control to set text color of button2 when hover on it.
            'fd_adv_btn2_hover_color',
			[
				'label' => __('Text Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dual-button-right:hover' => 'color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-right:hover' => 'color: {{VALUE}};',
				],
            ]
        );

        $this->add_control(//Add control for background color of button2 hover.
            'fd_adv_btn2_background_hover_color', 
			[
				'label' => __('Background Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dual-button-right:hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .dbwt-button-right:hover' => 'background-color: {{VALUE}};',
				],
				'condition' => ['fd_dual_btn1_layout!' => 'normal',],
            ]
        );

        $this->add_control(//Add control to set hover border color of dual & dbwt button.
            'fd_dual_btn2_hover_border_color',
			[
				'label' => __('Border Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'fd_adv_btn2_border!' => '',
					'fd_adv_btn_option' => 'dual_button',
				],
				'selectors' => [
					'{{WRAPPER}} .dual-button-right:hover' => 'border-color: {{VALUE}};',
				],
            ]
        );
        $this->add_control(//Add control to set hover border color of dual & dbwt button.
            'fd_dbwt_btn2_hover_border_color',
			[
				'label' => __('Border Color', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'fd_dbwt_btn2_border!' => '',
					'fd_adv_btn_option' => 'dbwt',
				],
				'selectors' => [
					'{{WRAPPER}} .dbwt-button-right:hover' => 'border-color: {{VALUE}};',
				],
            ]
        );

        $this->add_control(//To perforn the animation effect for button2.
            'fd_adv_btn2_hover_animation', 
			[
				'label' => __('Hover Animation', 'fd-elementor-button-plus'),
				'type' => Controls_Manager::HOVER_ANIMATION,
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_section();   //End button2 hover style section.
    }

    protected function render() {   //Render function for show output of advanced button element.
        $settings = $this->get_settings();

        $this->add_render_attribute('single-wrapper', 'class', 'single-button-wrapper');
        $this->add_render_attribute('adv-dual-wrapper', 'class', 'dual-button-wrapper');
        $this->add_render_attribute('adv-dbwt-wrapper', 'class', 'dual-button-with-text-wrapper');

        /* Button 1 */

        $this->add_render_attribute('btn1-tooltip', 'class', 'button-tooltip');
        $this->add_render_attribute('btn1-tooltip', 'class', 'tooltip-position-' . $settings['fd_btn1_tooltip_position']);
		

        if (!empty($settings['fd_adv_btn1_link']['url'])) {
            $this->add_render_attribute('single-button', 'href', $settings['fd_adv_btn1_link']['url']);
            if (!empty($settings['fd_adv_btn1_link']['is_external'])) {
                $this->add_render_attribute('single-button', 'target', '_blank');
            }
        }
		
		if ( $settings['fd_adv_btn1_link_type'] == 'nofollow' ) {
			$this->add_render_attribute( 'single-button', 'rel', $settings['fd_adv_btn1_link_type'] );
		}

        if ($settings['fd_adv_btn_option'] == 'adv_btn') {
            $this->add_render_attribute('single-button', 'class', 'elementor-button');
        }

        if ($settings['fd_adv_btn_option'] == 'dual_button') {
            $this->add_render_attribute('single-button', 'class', 'dual-button-left');
            $this->add_render_attribute('single-button', 'class', 'elementor-button');
        }

        if ($settings['fd_adv_btn_option'] == 'dbwt') {
            $this->add_render_attribute('single-button', 'class', 'dbwt-button-left');
            $this->add_render_attribute('single-button', 'class', 'elementor-button');
        }

        if (!empty($settings['fd_adv_btn1_size'])) {
            $this->add_render_attribute('single-button', 'class', 'elementor-size-' . $settings['fd_adv_btn1_size']);
        }

        if ($settings['fd_adv_btn_option'] == 'adv_btn') {

            if (!empty($settings['fd_adv_btn1_layout'])) {
                $this->add_render_attribute('single-button', 'class', 'single-button-' . $settings['fd_adv_btn1_layout']);
            }
        }

        if ($settings['fd_adv_btn_option'] == 'dual_button') {

            if (!empty($settings['fd_dual_btn1_layout'])) {
                $this->add_render_attribute('single-button', 'class', 'dual-button-' . $settings['fd_dual_btn1_layout']);
            }
        }

        if ($settings['fd_adv_btn_option'] == 'dbwt') {

            if (!empty($settings['fd_dual_btn1_layout'])) {
                $this->add_render_attribute('single-button', 'class', 'dbwt-button-' . $settings['fd_dual_btn1_layout']);
            }
        }

        if ($settings['fd_adv_btn_option'] == 'adv_btn') {
            if ($settings['fd_adv_btn1_layout'] == 'normal') {
                if (!empty($settings['fd_adv_btn1_style_normal'])) {
                    $this->add_render_attribute('single-button', 'class', $settings['fd_adv_btn1_style_normal']);
                }
            }

            if ($settings['fd_adv_btn1_layout'] == 'push') {
                if (!empty($settings['fd_adv_btn1_style_push'])) {
                    $this->add_render_attribute('single-button', 'class', $settings['fd_adv_btn1_style_push']);
                }
            }

            if ($settings['fd_adv_btn1_layout'] == 'circle') {
                if (!empty($settings['fd_adv_btn1_style_circle'])) {
                    $this->add_render_attribute('single-button', 'class', $settings['fd_adv_btn1_style_circle']);
                }
            }

            if ($settings['fd_adv_btn1_layout'] == 'slide') {
                if (!empty($settings['fd_adv_btn1_style_slide'])) {
                    $this->add_render_attribute('single-button', 'class', $settings['fd_adv_btn1_style_slide']);
                }
            }

            if ($settings['fd_adv_btn1_layout'] == 'swipe') {
                if (!empty($settings['fd_adv_btn1_style_swipe'])) {
                    $this->add_render_attribute('single-button', 'class', $settings['fd_adv_btn1_style_swipe']);
                }
            }

            if ($settings['fd_adv_btn1_layout'] == 'sketch') {
                $this->add_render_attribute('single-button', 'class', $settings['fd_adv_btn1_style_hand_drawn']);
            }
        }

        if ($settings['fd_adv_btn_option'] == 'dual_button') {
            if ($settings['fd_dual_btn1_layout'] == 'normal') {
                if (!empty($settings['fd_dual_btn1_style_normal'])) {
                    $this->add_render_attribute('single-button', 'class', $settings['fd_dual_btn1_style_normal']);
                }
            }

            if ($settings['fd_dual_btn1_layout'] == 'push') {
                if (!empty($settings['fd_dual_btn1_style_push'])) {
                    $this->add_render_attribute('single-button', 'class', $settings['fd_dual_btn1_style_push']);
                }
            }

            if ($settings['fd_dual_btn1_layout'] == 'slide') {
                if (!empty($settings['fd_dual_btn1_style_slide'])) {
                    $this->add_render_attribute('single-button', 'class', $settings['fd_dual_btn1_style_slide']);
                }
            }

            if ($settings['fd_dual_btn1_layout'] == 'swipe') {
                if (!empty($settings['fd_dual_btn1_style_swipe'])) {
                    $this->add_render_attribute('single-button', 'class', $settings['fd_dual_btn1_style_swipe']);
                }
            }
        }

        if ($settings['fd_adv_btn_option'] == 'dbwt') {
            if ($settings['fd_dual_btn1_layout'] == 'normal') {
                if (!empty($settings['fd_dual_btn1_style_normal'])) {
                    $this->add_render_attribute('single-button', 'class', $settings['fd_dual_btn1_style_normal']);
                }
            }

            if ($settings['fd_dual_btn1_layout'] == 'push') {
                if (!empty($settings['fd_dual_btn1_style_push'])) {
                    $this->add_render_attribute('single-button', 'class', $settings['fd_dual_btn1_style_push']);
                }
            }

            if ($settings['fd_dual_btn1_layout'] == 'slide') {
                if (!empty($settings['fd_dual_btn1_style_slide'])) {
                    $this->add_render_attribute('single-button', 'class', $settings['fd_dual_btn1_style_slide']);
                }
            }

            if ($settings['fd_dual_btn1_layout'] == 'swipe') {
                if (!empty($settings['fd_dual_btn1_style_swipe'])) {
                    $this->add_render_attribute('single-button', 'class', $settings['fd_dual_btn1_style_swipe']);
                }
            }
        }
        if (!empty($settings['fd_adv_btn1_hover_animation'])) {
            $this->add_render_attribute('single-button', 'class', 'elementor-animation-' . $settings['fd_adv_btn1_hover_animation']);
        }

        $this->add_render_attribute('adv-icon-align1', 'class', 'elementor-button-icon');
        $this->add_render_attribute('adv-icon-align1', 'class', 'elementor-align-icon-' . $settings['fd_adv_btn1_icon_align']);


        $this->add_render_attribute('fd-hover', 'class', 'btn-hover');

        /* Button 2 */
        $this->add_render_attribute('btn2-tooltip', 'class', 'button-tooltip');
        $this->add_render_attribute('btn2-tooltip', 'class', 'tooltip-position-' . $settings['fd_btn2_tooltip_position']);
        if (!empty($settings['fd_adv_btn2_link']['url'])) {
            $this->add_render_attribute('dual-button', 'href', $settings['fd_adv_btn2_link']['url']);
            if (!empty($settings['fd_adv_btn2_link']['is_external'])) {
                $this->add_render_attribute('dual-button', 'target', '_blank');
            }
        }
		if ( $settings['fd_adv_btn2_link_type'] == 'nofollow' ) {
			$this->add_render_attribute( 'dual-button', 'rel', $settings['fd_adv_btn2_link_type'] );
		}

        if ($settings['fd_adv_btn_option'] == 'dual_button') {
            $this->add_render_attribute('dual-button', 'class', 'dual-button-right');
            $this->add_render_attribute('dual-button', 'class', 'elementor-button');

            if (!empty($settings['fd_adv_btn1_size'])) {
                $this->add_render_attribute('dual-button', 'class', 'elementor-size-' . $settings['fd_adv_btn1_size']);
            }
            if (!empty($settings['fd_dual_btn1_layout'])) {
                $this->add_render_attribute('dual-button', 'class', 'dual-button-' . $settings['fd_dual_btn1_layout']);
            }
        }

        if ($settings['fd_adv_btn_option'] == 'dbwt') {

            $this->add_render_attribute('dual-button', 'class', 'dbwt-button-right');
            $this->add_render_attribute('dual-button', 'class', 'elementor-button');

            if (!empty($settings['fd_adv_btn1_size'])) {
                $this->add_render_attribute('dual-button', 'class', 'elementor-size-' . $settings['fd_adv_btn1_size']);
            }
            if (!empty($settings['fd_dual_btn1_layout'])) {
                $this->add_render_attribute('dual-button', 'class', 'dbwt-button-' . $settings['fd_dual_btn1_layout']);
            }
        }

        if ($settings['fd_adv_btn_option'] == 'dual_button') {
            if ($settings['fd_dual_btn1_layout'] == 'normal') {
                if (!empty($settings['fd_dual_btn2_style_normal'])) {
                    $this->add_render_attribute('dual-button', 'class', $settings['fd_dual_btn2_style_normal']);
                }
            }

            if ($settings['fd_dual_btn1_layout'] == 'push') {
                if (!empty($settings['fd_dual_btn2_style_push'])) {
                    $this->add_render_attribute('dual-button', 'class', $settings['fd_dual_btn2_style_push']);
                }
            }

            if ($settings['fd_dual_btn1_layout'] == 'slide') {
                if (!empty($settings['fd_dual_btn2_style_slide'])) {
                    $this->add_render_attribute('dual-button', 'class', $settings['fd_dual_btn2_style_slide']);
                }
            }

            if ($settings['fd_dual_btn1_layout'] == 'swipe') {
                if (!empty($settings['fd_dual_btn2_style_swipe'])) {
                    $this->add_render_attribute('dual-button', 'class', $settings['fd_dual_btn2_style_swipe']);
                }
            }
        }

        if ($settings['fd_adv_btn_option'] == 'dbwt') {
            if ($settings['fd_dual_btn1_layout'] == 'normal') {
                if (!empty($settings['fd_dual_btn2_style_normal'])) {
                    $this->add_render_attribute('dual-button', 'class', $settings['fd_dual_btn2_style_normal']);
                }
            }

            if ($settings['fd_dual_btn1_layout'] == 'push') {
                if (!empty($settings['fd_dual_btn2_style_push'])) {
                    $this->add_render_attribute('dual-button', 'class', $settings['fd_dual_btn2_style_push']);
                }
            }

            if ($settings['fd_dual_btn1_layout'] == 'slide') {
                if (!empty($settings['fd_dual_btn2_style_slide'])) {
                    $this->add_render_attribute('dual-button', 'class', $settings['fd_dual_btn2_style_slide']);
                }
            }

            if ($settings['fd_dual_btn1_layout'] == 'swipe') {
                if (!empty($settings['fd_dual_btn2_style_swipe'])) {
                    $this->add_render_attribute('dual-button', 'class', $settings['fd_dual_btn2_style_swipe']);
                }
            }
        }
        if ($settings['fd_adv_btn_option'] == 'dbwt') {
            $this->add_render_attribute('fd-dbwt-text', 'class', 'dbwt-button-text');
            if (!empty($settings['fd_dbwt_text_style'])) {
                if ($settings['fd_dbwt_text_style'] == 'italic') {
                    $this->add_render_attribute('fd-dbwt-text', 'style', 'font-style:italic');
                }
                if ($settings['fd_dbwt_text_style'] == 'bold') {
                    $this->add_render_attribute('fd-dbwt-text', 'style', 'font-weight:bold');
                }
                if ($settings['fd_dbwt_text_style'] == 'underline') {
                    $this->add_render_attribute('fd-dbwt-text', 'style', 'text-decoration:underline');
                }
                if ($settings['fd_dbwt_text_style'] == 'overline') {
                    $this->add_render_attribute('fd-dbwt-text', 'style', 'text-decoration:overline');
                }
                if ($settings['fd_dbwt_text_style'] == 'oblique') {
                    $this->add_render_attribute('fd-dbwt-text', 'style', 'font-style:oblique');
                }
                if ($settings['fd_dbwt_text_style'] == 'bold_italic') {
                    $this->add_render_attribute('fd-dbwt-text', 'style', 'font-weight:bold; ' . 'font-style:italic');
                }
                if ($settings['fd_dbwt_text_style'] == 'bold_underline') {
                    $this->add_render_attribute('fd-dbwt-text', 'style', 'font-weight:bold; ' . 'text-decoration:underline');
                }
                if ($settings['fd_dbwt_text_style'] == 'bold_overline') {
                    $this->add_render_attribute('fd-dbwt-text', 'style', 'font-weight:bold; ' . 'text-decoration:overline');
                }
            }
        }

        $this->add_render_attribute('adv-icon-align2', 'class', 'elementor-button-icon');
        $this->add_render_attribute('adv-icon-align2', 'class', 'elementor-align-icon-' . $settings['fd_adv_btn2_icon_align']);

		$this->add_render_attribute('fd-hover', 'class', 'btn-hover');

        if (!empty($settings['fd_adv_btn2_hover_animation'])) {
            $this->add_render_attribute('dual-button', 'class', 'elementor-animation-' . $settings['fd_adv_btn2_hover_animation']);
        }

        /* Single Button */
        if ($settings['fd_adv_btn_option'] == 'adv_btn') {
            ?>
            <div <?php echo $this->get_render_attribute_string('single-wrapper');  // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                <a <?php echo $this->get_render_attribute_string('single-button');  // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	
                    <?php if (!empty($settings['fd_adv_btn1_icon'])) : ?>
                        <span <?php echo $this->get_render_attribute_string('adv-icon-align1'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                           <?php Icons_Manager::render_icon( $settings['fd_adv_btn1_icon'], [ 'aria-hidden' => 'true' ] ); ?>		
                        </span>
                    <?php endif; ?>
                    <span <?php echo $this->get_render_attribute_string('fd-hover'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>></span>
                    <span class="single-button-text"><?php echo esc_html($settings['fd_adv_btn1_text']); ?></span>
                </a>
                <?php if ($settings['fd_adv_btn1_tooltip'] == 'yes') : ?>
                    <span <?php echo $this->get_render_attribute_string('btn1-tooltip'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                        <?php echo esc_html($settings['fd_btn1_tooltip_text']); ?>
                    </span>
                <?php endif; ?>
            </div>
            <?php
        }

        /* Dual Button */

        if ($settings['fd_adv_btn_option'] == 'dual_button') {
            ?>
            <div <?php echo $this->get_render_attribute_string('adv-dual-wrapper'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                <div class="btn-left" style="float: left">
                    <a <?php echo $this->get_render_attribute_string('single-button'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                        <?php if (!empty($settings['fd_adv_btn1_icon'])) : ?>
                            <span <?php echo $this->get_render_attribute_string('adv-icon-align1'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>                               
								 <?php Icons_Manager::render_icon( $settings['fd_adv_btn1_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </span>
                        <?php endif; ?>
                        <span <?php echo $this->get_render_attribute_string('fd-hover'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>></span>
                        <span class="dual-button-text"><?php echo esc_html($settings['fd_adv_btn1_text']); ?></span>
                    </a>
                    <?php if ($settings['fd_adv_btn1_tooltip'] == 'yes') : ?>
                        <span <?php echo $this->get_render_attribute_string('btn1-tooltip'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                            <?php echo esc_html($settings['fd_btn1_tooltip_text']); ?>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="btn-right" style="float: right">
                    <a <?php echo $this->get_render_attribute_string('dual-button'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                        <?php if (!empty($settings['fd_adv_btn2_icon'])) : ?>
                            <span <?php echo $this->get_render_attribute_string('adv-icon-align2'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                               <?php Icons_Manager::render_icon( $settings['fd_adv_btn2_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </span>
                        <?php endif; ?>
                        <span <?php echo $this->get_render_attribute_string('fd-hover'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>></span>
                        <span class="dual-button-text"><?php echo esc_html($settings['fd_adv_btn2_text']); ?></span>
                    </a>
                    <?php if ($settings['fd_adv_btn2_tooltip'] == 'yes') : ?>
                        <span <?php echo $this->get_render_attribute_string('btn2-tooltip'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                            <?php echo esc_html($settings['fd_btn2_tooltip_text']); ?>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <?php
        }

        /* Dual Button With Text Or Icon */

        if ($settings['fd_adv_btn_option'] == 'dbwt') {
            ?>
            <div <?php echo $this->get_render_attribute_string('adv-dbwt-wrapper'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                <div class="btn-left" style="float: left">
                    <a <?php echo $this->get_render_attribute_string('single-button'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                        <?php if (!empty($settings['fd_adv_btn1_icon'])) : ?>
                            <span <?php echo $this->get_render_attribute_string('adv-icon-align1'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                                 <?php Icons_Manager::render_icon( $settings['fd_adv_btn1_icon'], [ 'aria-hidden' => 'true' ] ); ?>		
                            </span>
                        <?php endif; ?>
                        <span <?php echo $this->get_render_attribute_string('fd-hover'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>></span>
                        <span class="dual-button-text"><?php echo esc_html($settings['fd_adv_btn1_text']); ?></span>
                    </a>
                    <?php if ($settings['fd_adv_btn1_tooltip'] == 'yes') : ?>
                        <span <?php echo $this->get_render_attribute_string('btn1-tooltip'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                            <?php echo esc_html($settings['fd_btn1_tooltip_text']); ?>
                        </span>
                    <?php endif; ?>

                    <?php if ($settings['fd_dbwt_btn_option'] == '') { ?>
                        <span <?php echo $this->get_render_attribute_string('fd-dbwt-text'); ?>><?php echo esc_html($settings['fd_dbwt_btn_text']); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        <?php } else { ?>
                            <span class="dbwt-btn-icon">                                
								<?php Icons_Manager::render_icon( $settings['fd_dbwt_icon'], [ 'aria-hidden' => 'true' ] ); ?>	
                            </span>
                        <?php } ?>
                    </span>
                </div>
                <div class="btn-right" style="float: right">
                    <a <?php echo $this->get_render_attribute_string('dual-button'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                        <?php if (!empty($settings['fd_adv_btn2_icon'])) : ?>
                            <span <?php echo $this->get_render_attribute_string('adv-icon-align2'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                               <?php Icons_Manager::render_icon( $settings['fd_adv_btn2_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </span>
                        <?php endif; ?>
                        <span <?php echo $this->get_render_attribute_string('fd-hover'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>></span>
                        <span class="dual-button-text"><?php echo esc_html($settings['fd_adv_btn2_text']); ?></span>
                    </a>
                    <?php if ($settings['fd_adv_btn2_tooltip'] == 'yes') : ?>
                        <span <?php echo $this->get_render_attribute_string('btn2-tooltip'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                            <?php echo esc_html($settings['fd_btn2_tooltip_text']); ?>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <?php
        }
    }

    protected function content_template() {  //this part increase the performing speed of advanced button element.
   
    }
}
Plugin::instance()->widgets_manager->register(new Widget_FD_Elementor_Button_plus());