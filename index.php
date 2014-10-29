<?php
ppinfo();

// Push the app with a specific PHP buildpack (if not installed on your target cloud)
// cf push meetup-cf-php-1 -m 128M -b https://github.com/dmikusa-pivotal/cf-php-build-pack.git
// cf logs meetup-cf-php-1 --recent (but you will want to use log services)
// cf push
// cf apps

// Set the PHP version for the buildpack and redeploy
// vi .bp-config/options.json
// cf push meetup-cf-php-1 -m 128M -b https://github.com/dmikusa-pivotal/cf-php-build-pack.git

// Scale the app to 3 instances
// cf scale meetup-cf-php-1 –i 3
// cf app meetup-cf-php-1

