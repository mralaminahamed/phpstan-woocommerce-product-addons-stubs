#!/usr/bin/env bash
#
# Release WooCommerce Product Add-Ons stubs for a specific version.
#
# Usage: bash bin/release-latest-versions.sh <VERSION>
#
# Before running, place plugin source in source/woocommerce-product-addons/
#

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
ROOT_DIR="$(dirname "$SCRIPT_DIR")"

set -e

VERSION="${1}"

if [ -z "$VERSION" ]; then
    echo "Usage: $0 <VERSION>"
    echo "Example: $0 6.9.0"
    exit 1
fi

echo "Releasing WooCommerce Product Add-Ons stubs for version ${VERSION}..."

if git -C "$ROOT_DIR" rev-parse "refs/tags/v${VERSION}" >/dev/null 2>&1; then
    echo "Tag v${VERSION} already exists!"
    exit 1
fi

if [ ! -d "$ROOT_DIR/source/woocommerce-product-addons" ]; then
    echo "ERROR: Source not found at $ROOT_DIR/source/woocommerce-product-addons"
    echo "Place the WooCommerce Product Add-Ons plugin source there first."
    exit 1
fi

echo "Generating stubs..."
"$SCRIPT_DIR/generate.sh"

if [ -n "$(git -C "$ROOT_DIR" status --porcelain)" ]; then
    git -C "$ROOT_DIR" add .
    git -C "$ROOT_DIR" commit -m "Generate stubs for WooCommerce Product Add-Ons ${VERSION}"
    git -C "$ROOT_DIR" tag "v${VERSION}"
    echo "Released v${VERSION}"
else
    echo "No changes to commit for version ${VERSION}"
fi
