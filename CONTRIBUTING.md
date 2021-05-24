# Contributing to zap-api-php

## Changelog
Relevant changes are tracked in `CHANGELOG.md`. When doing a pull request, consider updating it with the change done. The changes should be added to the Unreleased section.

## Generating The Client Files
All API class files (except Zap.php, ZapError.php, and tests) are generated automatically using `PhpAPIGenerator.java`. This functionality was initially offered by [yukisov/php-api-generator-for-owasp-zap](https://github.com/yukisov/php-api-generator-for-owasp-zap) and is now [maintained in zaproxy/zaproxy](https://github.com/zaproxy/zaproxy/blob/main/zap/src/main/java/org/zaproxy/zap/extension/api/PhpAPIGenerator.java).

The gradle tasks `generatePhpApiEndpoints` in `zaproxy/zaproxy`, and `generatePhpZapApiClientFiles` in `zaproxy/zap-extensions` can be used.

## Further Contribution Guidance
For full information about contributing to ZAP repositories please read [CONTRIBUTING.md](https://github.com/zaproxy/zaproxy/blob/main/CONTRIBUTING.md).