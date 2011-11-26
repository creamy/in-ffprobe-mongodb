#!/usr/bin/env bash

# $2 is movie filename
# $1 is collection name within mongodb motion

ffprobe $2 -v quiet -print_format json -show_format -show_streams -show_packets | ./jtom.php $1
