#!/usr/bin/env bash
#
# Generate WooCommerce Product Add-Ons stubs from the source directory.
#

HEADER=$'/**\n * Generated stub declarations for WooCommerce Product Add-Ons.\n * @see https://dokan.co\n * @see https://github.com/mralaminahamed/phpstan-woocommerce-product-addons-stubs\n */'

FILE="woocommerce-product-addons-stubs.php"
FILE_CONSTANTS="woocommerce-product-addons-constants-stubs.php"

set -e

test -f "$FILE" || touch "$FILE"
test -f "$FILE_CONSTANTS" || touch "$FILE_CONSTANTS"
test -d "source/woocommerce-product-addons"

# Exclude globals, constants.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"

# Exclude functions, classes, interfaces, traits and globals.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --constants \
    --out="$FILE_CONSTANTS"
