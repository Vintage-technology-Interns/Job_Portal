<?php
class Customer extends Admin_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->data['page_title'] = 'Dashboard';

	}

    public function index(){
        $this->data['mx']=null;
        $this->render_users_template('customer/page', $this->data);
    }

}


?>