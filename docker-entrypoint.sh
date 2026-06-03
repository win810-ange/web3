#!/bin/bash
set -e

if [ -n "$PORT" ]; then
    sed -i "s/80/${PORT}/g" /etc/apache2/sites-available/000-default.conf
    sed -i "s/80/${PORT}/g" /etc/apache2/ports.conf
fi

exec "$@"
