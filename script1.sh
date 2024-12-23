#!/bin/bash
read -p "component to be promoted:" comp
git add "$comp" && \
git commit -s --author="2197362 <shravani.dhuri@tcs.com>" -m "test file added" -m "[197362]"
git push origin master