while read -r line; do
  IFS=','

  found=0
  words=( $line )

  for ((i = 0; i < ${#words[0]}; i++)); do
    if [ "${words[0]}" == "${words[1]}" ]; then
      found=1
      break
    fi

    words[1]="${words[1]:1}${words[1]:0:1}"
  done

  if [ 1 -eq $found ]; then
    echo "True"
  else
    echo "False"
  fi
done < $1
