<?php
/**
 *
 * ThinkUp/webapp/crawler/stream2.php
 *
 * Copyright (c) 2011 Amy Unruh
 *
 * LICENSE:
 *
 * This file is part of ThinkUp (http://thinkupapp.com).
 *
 * ThinkUp is free software: you can redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any
 * later version.
 *
 * ThinkUp is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with ThinkUp.  If not, see
 * <http://www.gnu.org/licenses/>.
 *
 * @author Amy Unruh
 */

chdir("../../..");
require_once 'init.php';
//@TODO is there a better way to do this?
require_once THINKUP_WEBAPP_PATH.'plugins/twitterrealtime/model/class.StreamCollect2.php';
require_once THINKUP_WEBAPP_PATH.'plugins/twitterrealtime/model/class.ConsumerUserStream.php';
require_once THINKUP_WEBAPP_PATH.'plugins/twitterrealtime/model/class.StreamMessageQueueMySQL.php';


$stream_coll = new StreamCollect2($argc, $argv);
echo $stream_coll->consume();