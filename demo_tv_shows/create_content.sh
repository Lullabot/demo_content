#!/bin/sh

# Generate shows first so show references will work.
drush genc 5 --types=tv_show

# Generate seasons next so season references will work.
drush genc 20 --types=tv_season

# Generate episodes.
drush genc 50 --types=tv_episode
drush genc 50 --types=tv_episode
drush genc 50 --types=tv_episode
drush genc 50 --types=tv_episode

# Clean up devel generated content so season and episode numbers are in order
# and season and episode numbers are reflected in the titles.
drush demo-tv-shows-update-content
