<?php

class chart extends CI_Controller {

	public function index()
	{
		$this->load->view('chart');
	}

	function grafik()
	{
		$chartData=file_get_contents('assets/persentase_pertumbuhanekonomi.json');
		$chartData=json_decode($chartData);
		$res=array();

		foreach($chartData as $row)
		{
			$dat=[$row->tahun,(double)$row->val];
			array_push($res, $dat);
		}
		//echo json_encode($res);
		$data['PieChartTitle']='Persentase Pertumbuhan Ekonomi di Kab. Purworejo';
		$data['PieChartData']=json_encode($res);
		$this->load->view('grafik',$data);
	}

}
