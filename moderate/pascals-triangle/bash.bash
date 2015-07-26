while read -r line; do
    echo -n "1"

    for ((i = 1; i < $line; i++)); do
        echo -n " 1"

        current=1

        for ((j = 1; j <= $i; j++)); do
            current=$((($current * ($i + 1 - $j)) / $j))

            echo -n " $current"
        done
    done

    echo ""
done < $1
