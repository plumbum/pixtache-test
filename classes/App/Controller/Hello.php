<?php

namespace App\Controller;

class Hello extends \App\Page {

	public function action_index() {
		$this->view->subview = 'hello';
		$this->view->message = 'have FUN Coding!';
        $this->view->items = array(
            'first',
            'second',
            'threed',
            'fourth',
        );
        $this->view->color = array('red', 'green', 'blue', 'cyan', 'yellow', 'brown', 'magenta');
		$this->view->date = strftime('%F %T');
	}

}
