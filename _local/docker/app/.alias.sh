#!/bin/bash

# -------------------------------------------------------------------------------------------------- #
#  docker
# -------------------------------------------------------------------------------------------------- #
alias app.dc="docker compose"
alias app.up="app.dc up -d"
alias app.down="app.dc down"
alias app.restart="app.dc restart"
alias app.stop="app.dc stop"
alias app.start="app.dc start"
alias app.logs="app.dc logs -f"
alias app.exec="app.dc exec -it app"
alias app.zsh="app.exec zsh"
# -------------------------------------------------------------------------------------------------- #
# php
# -------------------------------------------------------------------------------------------------- #
alias app.php="app.exec php"
alias app.composer="app.exec composer"
# -------------------------------------------------------------------------------------------------- #
# artisan
# -------------------------------------------------------------------------------------------------- #
alias app.art="app.php artisan"
alias app.migrate="app.art migrate"
alias app.serve="app.art serve --host=0.0.0.0 --port=8000"
# -------------------------------------------------------------------------------------------------- #
# Tools Quality
# -------------------------------------------------------------------------------------------------- #
alias app.lint="app.php ./vendor/bin/pint"
alias app.check="app.php ./vendor/bin/psalm --show-info=true"
# -------------------------------------------------------------------------------------------------- #
# Tests & Coverage
# -------------------------------------------------------------------------------------------------- #
alias app.test="app.art test --env=testing"
alias app.pest="app.php ./vendor/bin/pest"
alias app.coverage="app.php ./vendor/bin/pest --coverage"
alias app.coverage-html="app.php ./vendor/bin/pest --coverage --coverage-html tests/Unit/output/coverage"
alias app.coverage-type="app.php ./vendor/bin/pest --type-coverage"
# -------------------------------------------------------------------------------------------------- #
# Git
# -------------------------------------------------------------------------------------------------- #
alias app.git-hook="app.php ./vendor/bin/captainhook install --force"
alias app.prepare="app.lint && app.check && app.pest --bail --compact"
# -------------------------------------------------------------------------------------------------- #
# Passport OAuth
# -------------------------------------------------------------------------------------------------- #
alias app.oauth-keys="app.art passport:keys --force"
alias app.oauth_client="app.art passport:client --client"
alias app.oauth_password="app.art passport:client --password"
# -------------------------------------------------------------------------------------------------- #
