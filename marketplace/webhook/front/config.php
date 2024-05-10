<?php
/*
 -------------------------------------------------------------------------
 Webhook plugin for GLPI
 Copyright (C) 2009-2018 by Eric Feron.
 -------------------------------------------------------------------------

 LICENSE
      
 This file is part of Webhook.

 Webhook is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 at your option any later version.

 Webhook is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Webhook. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

include ('../../../inc/includes.php');

Html::header(PluginWebhookConfig::getTypeName(2), '', "config", "pluginwebhookconfigmenu");
$config = new PluginWebhookConfig();

if ($config->canView() || Session::haveRight("config", UPDATE)) {
   Search::show('PluginWebhookConfig');
} else {
   Html::displayRightError();
}

Html::footer();

?>
