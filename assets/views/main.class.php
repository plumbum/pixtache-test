<?php

namespace PHPixie\Pixtache\View;

class Main extends \PHPixie\Pixtache\View {

    public function current_date() {
        return strftime('%F %T');
    }
}

