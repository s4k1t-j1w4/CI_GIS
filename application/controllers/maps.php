<?php
class Maps extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index()
    {
				$this->load->database();
        $this->load->library('googlemaps');
        $config['center'] = "-2.401183, 116.543652"; //center of maps
        $config['map_width'] = "950px";
        $config['map_height'] = "500px";
        $config['zoomControlPosition'] = "BOTTOM_LEFT"; //zoom control position
        $config['zoom'] = "5"; //zoom value
        $this->googlemaps->initialize($config);

                // create marker for each province
        $this->load->model('maps_model','m');
        foreach ($this->m->get_provinsi() as $row)    {
            $marker = array();
            $marker['position'] = $row->provinsi_lat.', '.$row->provinsi_long;
            $content = "<strong>".$row->provinsi_name." </strong>";
            $marker['infowindow_content'] = $content;
            $marker['title'] = $row->provinsi_name;
            $this->googlemaps->add_marker($marker);
        }

        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('maps_view', $data);
    }
}
