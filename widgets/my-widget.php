<?php
class Elementor_My_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'my-widget';
	}
	public function get_title() {
		return esc_html__( 'My Loop', 'elementor-addon' );
	}
	public function get_icon() {
		return 'eicon-map-pin';
	}
	public function get_categories() {
		return [ 'my-category' ];
	}
	public function get_keywords() {
		return [ 'map', 'loop', 'portfolio', 'project' ];
	}
	protected function register_controls() {
        $this->start_controls_section(
            'post_type_content',
            [
                'label' => esc_html__( 'Post Type', 'elementor-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'post_type',
            [
                'label' => esc_html__( 'Post Type Slug', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'project', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your post type here', 'textdomain' ),
            ]
        );
        $this->add_control(
            'maps_api',
            [
                'label' => esc_html__( 'Google Maps API', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Type your Google API key here', 'textdomain' ),
            ]
        );
        $this->end_controls_section();
        // Style tab 
        $this->start_controls_section(
            'section_unit_loop_style',
            [
                'label' => esc_html__( 'Unit Loop', 'elementor-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Unit # Typography', 'elementor-addon' ),
                'name' => 'unit_typography',
                'selector' => '{{WRAPPER}} .building_title',
            ]
        );
        $this->add_control(
            'unit_color',
            [
                'label' => esc_html__( 'Unit # Color', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .building_title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();
        // Style Tab End
  }
   
protected function render() {
    $settings = $this->get_settings_for_display(); ?>
    <style>
      /* CSS Style goes here */
    </style>
    <div>
      This is the body
    </div>
<?php }
}
