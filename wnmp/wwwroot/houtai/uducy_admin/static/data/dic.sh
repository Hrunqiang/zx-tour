#!/bin/sh
/usr/local/php/bin/php -f /data/game/uducy_admin/index_cli.php  CartoonSpider/dict
/usr/local/mmseg3/bin/mmseg -u /data/game/uducy_admin/static/data/unigram_dest.txt
mv /data/game/uducy_admin/static/data/unigram_dest.txt.uni /usr/local/mmseg3/cartoon/uni.lib


python /usr/local/mmseg3/script/build_thesaurus.py /data/game/uducy_admin/static/data/unigram_dest.txt > /usr/local/mmseg3/cartoon/thesaurus.txt
cd  /usr/local/mmseg3/cartoon/
/usr/local/mmseg3/bin/mmseg -t /usr/local/mmseg3/cartoon/thesaurus.txt


/usr/local/coreseek/bin/searchd -c /usr/local/coreseek/cartoon/cartoon.conf --stopwait
/usr/local/coreseek/bin/searchd -c /usr/local/coreseek/cartoon/cartoon.conf
/usr/local/coreseek/bin/indexer -c /usr/local/coreseek/cartoon/cartoon.conf --all --rotate