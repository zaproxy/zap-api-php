# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
### Added
- The following APIs: AccessControl, Alert, AlertFilter, GraphQl, ImportUrls, LocalProxies,
  OpenApi, Replacer, Reports, Revisit, RuleConfig, Soap, Wappalyzer, Websocket.
- An option to allow making requests securely.
- Some tests.
- CI for linting, static analysis and running tests.
- CONTRIBUTING and CHANGELOG.

### Changed
- Moved from the main `zaproxy` repository.
- Added missing 'apikey' parameter to View endpoints.
- Use cURL to make requests.
- Renamed package from `zaproxy/php-owasp-zap-v2` to `zaproxy/api-client`.
- Renamed class from `Zapv2` to `Zap`.
- Extracted `ZapError` to a separate file.
- Updated core APIs for ZAP 2.10.0.
- Updated README.

[Unreleased]: https://github.com/zaproxy/zap-api-php/compare/eec7007b3b5930fcb0489a27ece4e8502d6c0d29...HEAD