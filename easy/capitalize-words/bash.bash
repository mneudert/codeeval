while read -r line; do
    words=( $line )

    for i in "${!words[@]}"; do
        if ! [ 0 -eq $i ]; then
            echo -n " "
        fi

        echo -n ${words[$i]^}
    done

    echo ""
done < $1
