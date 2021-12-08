#!/bin/bash
echo "Content-type: text/html"
echo ""
now="$(date)"
echo '<html><head><title>Hello World - CGI
app</title></head>'
echo '<body>'

input=$(cat)
value=$(<file.txt)
summ=$(($value+1))


echo '<h2>Hello World!!</h2>'
echo '<br />'
echo "visit summ: ${summ}"
echo '<br />'
echo $QUERY_STRING
echo '<br />'
echo $REQUEST_METHOD
echo '<br />'
echo "Input result : ${input} <br />"
echo '<br />'
echo "Computer name : $HOSTNAME<br/>"
echo "The current date and time : ${now}<br/>"
echo '</body>'
echo '</html>'

echo "$summ" > file.txt

