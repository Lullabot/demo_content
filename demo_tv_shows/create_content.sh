#!/bin/sh

# Generate shows first so show references will work.
drush genc 5 --types=tv_show

# Generate seasons next so season references will work.
drush genc 20 --types=tv_season

# Finally generate episodes.
drush genc 50 --types=tv_episode
drush genc 50 --types=tv_episode
drush genc 50 --types=tv_episode
drush genc 50 --types=tv_episode
