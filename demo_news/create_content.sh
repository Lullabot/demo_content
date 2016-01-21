#!/bin/sh

# Generate news nodes.
drush genc 50 --types=news

# Clean up devel generated content so it includes embedded content.
drush demo-news-update-content
