<?php

/** @var  \Herbert\Framework\Application $container */

use AgreablePartnershipPlugin\Hooks\BasicDetailsAcf;
use AgreablePartnershipPlugin\Hooks\SocialMediaAcf;
use AgreablePartnershipPlugin\Hooks\HtmlOverridesAcf;
use AgreablePartnershipPlugin\Hooks\NavMigration;

(new BasicDetailsAcf)->init();
(new SocialMediaAcf)->init();
(new HtmlOverridesAcf)->init();
(new NavMigration)->init();
