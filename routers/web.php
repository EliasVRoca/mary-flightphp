<?php
Flight::route('GET /', Maincontroller::class. '->main');
Flight::route('GET /delete', Maincontroller::class. '->delete');
