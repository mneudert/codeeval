while read -r line; do
  nums=( ${line/,/ } )

  echo "$(( ${nums[0]} - (${nums[0]} / ${nums[1]}) * ${nums[1]} ))"
done < $1
