<?php

use Thor\Facades\Action;

Action::add('wp_enqueue_scripts', [\Thor\Setup\Enqueues::class, 'front']);
Action::add('admin_enqueue_scripts', [\Thor\Setup\Enqueues::class, 'admin']);
