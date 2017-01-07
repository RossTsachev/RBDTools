php vendor/phpcheckstyle/phpcheckstyle/run.php --src src --format html --outdir builds/phpcheckstyle

php vendor/phpmd/phpmd/src/bin/phpmd src html vendor/phpmd/phpmd/src/main/resources/rulesets/codesize.xml > builds/phpmd/index.html

php vendor/sebastian/phpcpd/phpcpd src

php vendor/pdepend/pdepend/src/bin/pdepend --summary-xml=builds/pdepend/summary.xml  --jdepend-chart=builds/pdepend/jdepend.svg   --overview-pyramid=builds/pdepend/pyramid.svg src

php vendor/squizlabs/php_codesniffer/scripts/phpcs --report=xml --report-file=builds/phpcs/phpcs.xml src