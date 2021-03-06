<?php

require_once(get_template_directory() . "/app/controllers/PaginationController.php");

require_once(get_template_directory() . "/app/services/AbstractLoadInformation.php");
require_once(get_template_directory() . "/app/services/LoadVideoInformations.php");
require_once(get_template_directory() . "/app/services/LoadPicturesInformations.php");
require_once(get_template_directory() . "/app/services/ServiceText.php");
require_once(get_template_directory() . "/app/services/WayToPet.php");

require_once(get_template_directory() . "/app/enuns/PagesEnum.php");
require_once(get_template_directory() . "/app/enuns/ErrorMsg.php");
require_once(get_template_directory() . "/app/enuns/AddressEnun.php");

require_once(get_template_directory() . "/app/helpers/ReadSQLAndExec.php");

require_once(get_template_directory() . "/app/components/Components.php");

require_once(get_template_directory() . "/app/routes/Routes.php");

require_once(get_template_directory() . "/app/dtos/Request.php");