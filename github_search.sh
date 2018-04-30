#!/bin/bash

: 'This function is useful for testing as it output correct the \n
echo(){
    printf '%b ' "$@\n\c"
}'

count=1

:	'$1:component, $2:number of requests, $3 number of results per page, 
	 so the script should be used in this order:
	./github_search.sh $language_urlencoded+size%3A$size_cmp$size+page= $pages $per_page
	./github_search.sh php+size%3A%3C300+page= 10 30'

 
subs=" https://api.github.com/search/repositories?q=+language%3A$1"

s=""

while [[ $count -le $2 ]]; do

	s+=$subs$count"&per_page="$3
	let "count++"

done

wget --output-document=results2.json $s 2>&1
