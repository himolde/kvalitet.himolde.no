#!/bin/bash
cd /usr/share/drupal/dokumenter
for file in KS_*_*; do
    ext=`echo $file | sed -e "s/.*\.//"`
    basename=`echo $file | sed -re "s/_[0-9]+\.$ext//"`;
    lastfile=`ls -t ${basename}_* | head -n 1`
    if [[ $lastfile != $file ]]; then
        # echo "Skipping $file since it's not the latest"
        continue
    fi
    # echo "Linking to $lastfile"
    if [[ ( -e $basename.$ext ) && ( ! -L $basename.$ext ) ]]; then
        mv $basename.$ext ${basename}-old.$ext
    fi
    ln -sf $lastfile $basename.$ext 
done

