#!/bin/bash

kurssidemal="/usr/share/drupal/sites/kvalitet2.himolde.no/themes/himolde/himolde-menus.html"
menystart="<!-- Start HiMolde Main Menu -->"
menyend="<!-- End HiMolde Main Menu -->"

tmpfil=`mktemp`

## # Get a page and extract the menu. 
## wget -q -O $tmpfil 'http://www.himolde.no/index.cfm?pageID=2069'

# Get the menu directly.
wget -q -O $tmpfil 'http://www.himolde.no/content/api/HSM/TOC/css_hovedmeny.htm'

# This parsing isn't really needed when getting the menu directly.
ex $tmpfil -s <<EOF
1,/$menystart/ d
/$menyend/ d
wq
EOF

cp $tmpfil $kurssidemal
chmod 644 $kurssidemal
rm $tmpfil

