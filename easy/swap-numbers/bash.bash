# missing "new line" on the last line of the input file
eof=false

until $eof; do
    read line || eof=true

    words=( $line )

    for i in "${!words[@]}"; do
        if ! [ 0 -eq $i ]; then
            echo -n " "
        fi

        word=${words[$i]}
        len=${#word}

        echo -n ${word:($len - 1)}${word:1:($len - 2)}${word:0:1}
    done

    echo ""
done < $1
