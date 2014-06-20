<?php

namespace App\Controller;

class Hello extends \App\Page {

	public function action_index() {
		$this->view->subview = 'hello';
		$this->view->message = 'Have fun coding';
        $this->view->items = array(
            'first',
            'second',
            'threed',
            'fourth',
        );
		$this->view->date = strftime('%F %T');
	}

}
